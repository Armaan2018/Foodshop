<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codenpixel.com/demo/foodpicky/food_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 19:12:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{URL::to('')}}/admin/myicon.png">
   <title>Burger Express | Its Faster</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/animate.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet"> </head>

    <style type="text/css">
      main {
  padding: 100px 0;
  width: 600px;
  margin: 0 auto;
}

header {
  height: 100px;
  margin-bottom: 50px;
}

h1 {
  float: left;
  margin: 0;
}

h2 {
  margin: 0 0 50px;
}

#cart-container {
  float: right;
  width: 210px;
  position: relative;
}

#itemCount {
  position: absolute;
  display: none;
  top: -10px;
  left: -10px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: red;
  color: white;
  text-align: center;
}

img {
  width: 100%;
}

.item {
  width: 31%;
  float: left;
  margin: 1%;
}

i:hover {
  cursor: pointer;
}

#shoppingCart {
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: none;
  position: absolute;
  z-index: 9999;
  background: rgba(0, 0, 0, 0.6);
}

#cartItems {
  position: relative;
  width: 600px;
  left: 50%;
  top: 150px;
  margin-left: -300px;
  padding: 40px;
  box-shadow: 0 0 10px black;
  background: #e9e9e9;
  overflow: auto;
}

#cartItems i {
  position: absolute;
  top: 20px;
  right: 20px;
}

#cartItems .itemDetails {
  overflow: auto;
  width: 100%;
  margin-bottom: 40px;
}

#cartItems .itemImage {
  float: left;
  width: 260px;
  padding: 0 40px;
}

#cartItems .itemText {
  float: right;
  width: 260px;
  padding: 0 40px;
}

.removeItem {
  margin-left: 40px;
}


    </style>

<body>
      
 




  


    
      <div class="container-fluid">
   <div class="row">
    @foreach ($products as $element)
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$element -> name}}</h5>
        <p class="card-text">{{$element -> price}}</p>
        <a href="" id="btnidadd" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
   </div>

   
<div class="divcart">
  <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">shopping cart</h5>
    <p class="card-text" id="bla"></p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>


  
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/animsition.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/headroom.js') }}"></script>
    <script src="{{ asset('front/assets/js/foodpicky.min.js') }}"></script>
     <script src="{{ asset('front/assets/js/custom.js') }}"></script>
     <script src="{{ asset('front/assets/js/cart.js') }}"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 19:12:33 GMT -->
</html>