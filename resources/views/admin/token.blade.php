<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss");
  </head>
  <body>
  <div class="container-scroller">
    
       @include("admin.navbar");
       <div style="position: relative; top: 60px; right: -160px">
        <form action="{{url('/token')}}" method="post" enctype="multipart/form-data">
            @csrf

          <div>
            <label >Title :</label>
            <input style="color:blue;" type="text" name="title" placeholder="Write a title"  require>

            
          </div>
          <div  style="position: relative; top: 2px;  ">
            <label >Price :</label>
            <input style="color:blue;" type="num" name="price" placeholder="Write a price"  require>

            
          </div>

          <div  style="position: relative; top: 4px; right: 20px ">
            <label >Location :</label>
            <input style="color:blue;" type="text" name="location" placeholder="Write a location"  require>

            
          </div>
          <div style="position: relative; top: 8px; right:-25px">
            <label >ID :</label>
            <input style="color:blue;" type="text" name="id" placeholder="Id"  require>

            
          </div>

          <div style="position: relative; top: 15px; right: 14px ">
            <label >Token :</label>
            <input style="color:blue;" type="text" name="token" placeholder="Token"  require>

            
          </div>

          <div style="position: relative; top: 30px; right: -60px">
            <input style="color:white;" type="submit" value="Save">

            
          </div>



        </form>

        
      <div>
      <h1  align="center" style="padding: 30px;" >Get Token</h1>
 <table align="center" bgcolor="black">
    <tr>
        <th style="padding: 30px;">Title</th>
        <th style="padding: 30px;">Price</th>
        <th style="padding: 30px;">Location</th>
        <th style="padding: 30px;">Id</th>
        <th style="padding: 30px;">Token</th>
        <th style="padding: 30px;  right: -60px ">Action</th>

    </tr>
    @foreach($members as $member)
    <tr>
        <td style="padding: 30px;">{{$member['title']}}</td>
        <td style="padding: 30px;">{{$member['price']}}</td>
        <td style="padding: 30px;">{{$member['location']}}</td>
        <td style="padding: 30px;">{{$member['image']}}</td>
        <td style="padding: 30px;">{{$member['Token']}}</td>
        <td>
        <td ><a href="{{url('deletetoken',$member->id)}}">DELETE</a></td>
       <!-- <td>
        <a href="{{url('/payment')}}" class="btn btn-warning">Payment</a>
        </td>-->
    </tr>
    @endforeach
 </table>

        </div>
    
    
    </body>
  </html>