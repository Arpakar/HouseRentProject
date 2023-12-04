<!DOCTYPE html>
<html>
<head>
    <title>Card Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <base href="/public">
    <meta charset="utf-8">
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">HOUSE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/" class="nav-item nav-link active">About</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                       
                       
                        </div>
                       
                       





                       
                    
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
               <div class="col-md-6 p-5 mt-lg-5">
                    <!--<h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>-->
                    <!--<p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>-->
                   <!-- <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>-->
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <!--<div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
     
     <div >
   

</head>

<div>
<form action="{{url('/token')}}" method="post" enctype="multipart/form-data">
            @csrf
 <h1  align="center" style="padding: 30px;" >Get Token</h1>
 <table align="center" bgcolor="black">
    <tr>
        <th style="padding: 30px;">Title</th>
        <th style="padding: 30px;">Price</th>
        <th style="padding: 30px;">Location</th>
        <th style="padding: 30px;">Id</th>
        <th style="padding: 30px;">Token</th>
       

    </tr>
    @foreach($members as $member)
    <tr>
        <td style="padding: 30px;">{{$member['title']}}</td>
        <td style="padding: 30px;">{{$member['price']}}</td>
        <td style="padding: 30px;">{{$member['location']}}</td>
        <td style="padding: 30px;">{{$member['image']}}</td>
        <td style="padding: 30px;">{{$member['Token']}}</td>
        <td>
        <a href="{{url('/payment')}}" class="btn btn-warning">Payment</a>
        </td>
        <!--<td><a href="{{url('payment',$member->id)}}">PaymentE</a></td>-->
    </tr>
    @endforeach
 </table>






         

<!--<div align="center" style="padding: 10px;">

      <button class="btn btn-primary" type="button" id="order">Order Now</button>
 </div>


<div align="center" style="padding: 10px;">

<div align="center"  style="padding: 10px;">
  <label>Title</label>
  <input type="text" name="name" placeholder="Name">

</div>
<div  style="padding: 10px;">
  <label>Price</label>
  <input type="number" name="Price" placeholder="Price">

</div>

<div  style="padding: 10px;">
  <label>Id</label>
  <input type="number" name="id" placeholder="id">

</div>

<div  style="padding: 10px;">
  <label>Token</label>
  <input type="text" name="Token" value="{{$member->Token}}">

</div>


<!--<div  style="padding: 10px;">

 <a href="{{url('/payment'.$member->Token)}}" class="btn btn-warning">Payment</a>
 <input type="text" name="Token" value="{{$member->Token}}">
  
</div>


</form>
</div>-->





<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


   
    
</body>




</html>