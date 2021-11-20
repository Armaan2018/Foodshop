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
    <link href="{{ asset('front/assets/css/al.min.css') }}" rel="stylesheet"> </head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                     <a class="navbar-brand" href="{{ route('homepage') }}"> <h3><strong class="text-white">Burger</strong><strong class="text-warning">Express</strong></h3> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a> </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="front/assets/profile.html">Pick Your favorite food</a></li> <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="front/assets/profile.html">Quantity And Editional Stuffs</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="front/assets/checkout.html">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <div class="container m-t-30">
                <div class="widget clearfix">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                                        Your Personal Details
                                    </h3>
                        <div class="clearfix"></div>
                    </div>

                    <div id="borolekha"><h1 class="display-1"></h1></div>
                    <div class="widget-body" id="clear_div">
                        <form id="customer_form_id" action ="{{ route('check.burger.customer.info', $burg -> id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4 margin-b-30">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Your Name*</label>
                                                <input type="text" placeholder="Your Name" class="form-control" name="name"> 
                                                <span class="text-danger" id="error_text_name"></span>

                                              </div>
                                            <input name="catch_id" type="hidden" id_attr="{{ $burg -> id}}">
                                        </div>
                                       
                                    </div>
                             
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Full Address*</label>
                                                <input type="text" class="form-control" placeholder="124, Dakkhin Para Street.." name="address"> 
                                                 <span class="text-danger" id="error_text_address"></span>

                                              </div>
                                            <!--/form-group-->
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" name="email" class="form-control" placeholder="john@doe.com">
                                                 <span class="text-danger" id="error_text_email"></span> </div>
                                            <!--/form-group-->
                                        </div>
                                       
                                    </div>  


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Phone Number*</label>
                                                <input type="text" name="phone" class="form-control" placeholder="+880....."> 
                                                <span class="text-danger" id="error_text_phone"></span>

                                                 </div>
                                            <!--/form-group-->
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
                                          <table class="table table-bordered">
  <thead >
    <tr>
      <th scope="col">Burger</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity | Size</th>
      <th scope="col">Total</th>
     
    </tr>
  </thead>
  <tbody>

 
      
      @php
          $burger = json_decode($burg -> burger);
          $snacks = json_decode($burg -> snacks);
          $drinks = json_decode($burg -> drinks);
          $restaurant = json_decode($burg -> restaurant);
          $total  = $burg -> total;
         
      @endphp
 
         
    

     <tr>
         <th scope="row">{{ $burger -> burgername}}</th>
         <td>{{ $burger -> burgerprice}}</td>
         <td>{{ $burger -> burgquantity}}|{{ $burger -> burgsize}}</td>
         <td>{{ $burger -> total}}</td>
     </tr> 


     <tr>
         <th scope="row">Snacks</th>
         <td>{{ $snacks -> snack_bill}}</td>
         <td>{{ $snacks -> snack_quantity}} <strong>x</strong> {{ $snacks -> snack_name}}</td>
         <td>{{ $snacks -> snacks_bill}}</td>
     </tr> 

     <tr>
         <th scope="row">Drinks</th>
         <td>{{ $drinks -> drinkprice}} [{{ $drinks -> drinkname}}]</td>
         <td>{{ $drinks -> drinkquan}} <strong>x</strong> {{ $drinks -> drinksize}}</td>
         <td>{{ $drinks -> totaldrink}}</td>
     </tr>

     <tr>
  
      <td colspan="3"><span><strong class="text-info">{{$restaurant -> restname}}</strong></span> </td>
      <td><strong>
     {{ $total }}
      </strong>Tk</td>
    </tr>
    
  </tbody>
</table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input id="radioStacked1" name="payment" type="radio" class="custom-control-input" value="Cash On Delivery"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Payment on delivery</span>
                                                    <br> <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span> </label>
                                                    <span class="text-danger" id="error_text_payment"></span>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-radio  m-b-10">
                                                    <input name="payment" type="radio" class="custom-control-input" name="payment" value="Paypal"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src = "{{URL::to('')}}/front/assets/images/paypal.jpg" alt="" width="90"></span> </label>
                                            </li>
                                        </ul>
                                        <p class="text-xs-center"> <button class="btn btn-outline-success btn-block" id="sub_btn_id" type="submit">Pay now</button> </p>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <section class="app-section">
                <div class="app-wrap">
                    <div class="container">
                        <div class="row text-img-block text-xs-left">
                            <div class="container">
                                <div class="col-xs-12 col-sm-6  right-image text-center">
                                    <figure> <img src = "{{URL::to('')}}/front/assets/images/app.png" alt="Right Image"> </figure>
                                </div>
                                <div class="col-xs-12 col-sm-6 left-text">
                                    <h3>The Best Food Delivery App</h3>
                                    <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                    <div class="social-btns">
                                        <a href="#" class="app-btn apple-button clearfix">
                                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                        </a>
                                        <a href="#" class="app-btn android-button clearfix">
                                            <div class="pull-left"><i class="fa fa-android"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!-- start: FOOTER -->
            <footer class="footer">
                <div class="container">
                    <!-- top footer statrs -->
               
                    <!-- top footer ends -->
                    <!-- bottom footer statrs -->
                    <div class="row bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                                    <h5>Payment Options</h5>
                                    <ul>
                                        <li>
                                            <a href="front/assets/#"> <img src = "{{URL::to('')}}/front/assets/images/paypal.png" alt="Paypal"> </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>Concept design of oline food order and deliveye,planned as restaurant directory</p>
                                    <h5>Phone: <a href="front/assets/tel:+080000012222">080 000012 222</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                    <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bottom footer ends -->
                </div>
            </footer>
            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
         </div>
    </div>


    <div id="alBox"></div>
    <!--/end:Site wrapper -->
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
     <script src="{{ asset('front/assets/js/al.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/backend/backend.js') }}"></script>
    
</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 19:12:35 GMT -->
</html>