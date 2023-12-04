<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    
       @include("admin.navbar")
    <!-- container-scroller -->
    <!-- plugins:js -->

    <h1>Castomers Orders</h1>

    <table  >
        <tr>
            <td style="padding:30px;">Property Name</td>
            <td style="padding:30px;">Price</td>
            <td style="padding:30px;">Quantity</td>
            <td style="padding:30px;">Name</td>
            <td style="padding:30px;">Phone No</td>
            <td style="padding:30px;">Address</td>
            <td style="padding:30px;">Action</td>
        </tr>
         

        @foreach($data as $data)
        <tr align="center" bgcolor="black" >
          <td>{{$data->propertyname}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->quantity}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->address}}</td>
          <td><a href="{{url('deleteorder',$data->id)}}">DELETE</a></td>
        </tr>
        @endforeach
    </table>

</div>
    @include("admin.adminscript")
  </body>
</html>