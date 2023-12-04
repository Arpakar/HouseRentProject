<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Property;
use App\Models\Paytoken;
use App\Models\Orderproperty;

class AdminController extends Controller
{
    public function user(){
        $data=user::all();
        return view ('admin.users',compact("data"));
        }



        public function token(){

            $members = Paytoken::all();
            
            return view ('admin.token',compact("members"));
            }


    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
        }

        public function deletemenu($id)
        {
            $data=property::find($id);
            $data->delete();
             return redirect()->back();


        }

        public function deleteorder($id)
        {
            $data=Orderproperty::find($id);
            $data->delete();
             return redirect()->back();


        }

       # public function deletetoken($id)
       # {
            #$members=Paytoken::find($id);
          # $members->delete();
           #  return redirect()->back();
             #return view ('admin.token');


       # }

       public function deletetoken(Request $request,$id)
       {

          # if (Auth::id()) {

             #  $user_id=Auth::id();
              # $propertyid=$id;
              # $quantity=$request->quantity;
              ## $cart=new Cart;
              # $cart->user_id=$user_id;
              # $cart->property_id=$propertyid;
               #$cart->quantity=$quantity;
               #$cart->save(); 
              $members=Paytoken::find($id);
           $members->delete();
           return redirect()->back();

               return redirect()->back();
         
       }



        public function property(){
            $data= property::all();
            
            return view ('admin.property',compact("data"));
        }



        public function showorder(){
            $data= Orderproperty::all();
            
            return view ('admin.order',compact("data"));
        }



        public function upload(Request $request){
            $data= new Property;

            $image= $request->image;

            $imagename =time().'.'.$image->getClientOriginalExtension();
             $request->image->move('propertyimage',$imagename);
             $data->image=$imagename;

             $data->title=$request->title;
             $data->price=$request->price;
             $data->location=$request->location;
             $data->description=$request->description;
             
             $data->save();
             return redirect()->back();
            
           
        }



        public function tokenn(Request $request){
            $data= new Paytoken;

           # $image= $request->image;

           # $imagename =time().'.'.$image->getClientOriginalExtension();
            # $request->image->move('propertyimage',$imagename);
             #$data->image=$imagename;

             $data->title=$request->title;
             $data->price=$request->price;
             $data->location=$request->location;
             $data->image=$request->id;
             $data->token=$request->token;
             
             $data->save();
             return redirect()->back();
            
           
        }

}
