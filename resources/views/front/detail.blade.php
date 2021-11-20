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
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="front/assets/profile.html">Pick Your favorite food</a></li> <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="front/assets/profile.html">Quantity And Editional Stuffs</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a href="front/assets/checkout.html">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->

            @foreach ($data -> restaurants as $rest)
              {{-- expr --}}
            
           <section class="inner-page-hero bg-image" data-image-src="https://resizer.otstatic.com/v2/photos/wide-huge/3/31208041.jpg" style="background: url(https://resizer.otstatic.com/v2/photos/wide-huge/3/31208041.jpg) center center / cover no-repeat;">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                           <div class="image-wrap">
                              <figure><img src="{{URL::to('')}}/media/restaurant/{{$rest -> restimg}}" alt="Profile Image"></figure>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                           <div class="pull-left right-text white-txt">
                              <h6><a href="#">{{$rest -> restname}}</a></h6>
                              <a class="btn btn-small btn-green">Open</a>
                              <p>Burgers, American,</p>
                              <p>{{ $rest -> location}}</p>
                              <ul class="nav nav-inline">
                                 <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min 200 Tk</a> </li>
                                 <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-motorcycle"></i> {{$rest -> distance}}</a> </li>
                                 <li class="nav-item ratings">
                                    <a class="nav-link" href="#"> <span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span> </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            @endforeach
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     <li><a href="#">Search results</a></li>
                     <li>Profile</li>
                  </ul>
               </div>
            </div>
            <div class="container m-t-30">
               <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="sidebar clearfix m-b-20">
                        <div class="main-block">
                           <div class="sidebar-title white-txt">
                              <h6>Choose Cusine</h6>
                              <i class="fa fa-cutlery pull-right"></i> 
                           </div>
                           <ul>
                              <li><a href="#1" class="scroll active">Pizza</a></li>
                              <li><a href="#2" class="scroll">Barbecuing and Grilling</a></li>
                              <li><a href="#3" class="scroll">Appetizers</a></li>
                              <li><a href="#4" class="scroll">Soup and salads</a></li>
                              <li><a href="#5" class="scroll">Pasta</a></li>
                              <li><a href="#6" class="scroll">Seafood</a></li>
                              <li><a href="#7" class="scroll">Beverages</a></li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                        <!-- end:Sidebar nav -->
                        <div class="widget-delivery">
                           <form>
                              <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                 <label class="custom-control custom-radio">
                                 <input id="radio1" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                              </div>
                              <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                 <label class="custom-control custom-radio">
                                 <input id="radio2" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- end:Left Sidebar -->
                     <div class="widget clearfix">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Popular tags
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                           <ul class="tags">
                              <li> <a href="#" class="tag">
                                 Coupons
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Discounts
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Deals
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Amazon 
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Ebay
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Fashion
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Shoes
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Kids
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Travel
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Hosting
                                 </a> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
                  <!-- end:Bar -->
                <form action="{{ route('detail.page.burger',$data -> id) }}" method="POST">
                  @csrf
                  <div class="col-xs-12 col-md-12 col-lg-8">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
                              <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                              <div class="clearfix"></div>
                           </div>
                     
                           <div class="order-row bg-dark" style="height: 100px;">
                              <div class="widget-body">
                                 <div class="col-xs-4">
                                    <div class="imagesys">
                                    <img style="height: 80px; margin: -12px;" src="{{URL::to('')}}/media/burger/{{$data -> image}}"> 
                                    </div> 
                                 </div> 
                                 <div class="col-xs-8">
                                    <strong class="text-center text-bold" style="font-size: 25px;" >{{ $data -> name}}</strong>
                                 </div>
                                 
                              </div>
                           </div>



                     
                           <div class="order-row bg-white">
                              <div class="widget-body">
                                 <div class="title-row">{{ $data -> name}} <span id="price_tag" class="pull-right">{{$data -> price}}</span>
                                 
                                 </div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0" id="sizeselect" name="size" nevattr="{{$data -> price}}">
                                          <option value="SM" >Size SM</option>
                                          <option value="LG"> Size LG</option>
                                          <option value="XL">Size XL</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-4">
                                       <input class="form-control" type="number" name="quantity" value="1" id="burgquan"> 
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="order-row bg-dark">
                              <div class="widget-body">
                                 <div class="title-row">Snacks<span id="price_tag_snacks" class="pull-right">0</span></div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0" id="snack_select" name="snacks">
                                          <option value="0" selected disabled>Choose Drinks Items</option>
                                          <option value="French Fry">French Fry  -50Tk</option>
                                          <option value="Wadges" id="wad">Potato Wadges -75Tk</option>
                                          <option value="Wounthon">Wounthon(6pcs) -100Tk</option>
                                          <option value="Nuggets">Nuggets(6pcs) -150Tk</option>
                                       
                                       </select>
                                    </div>
                                    <div class="col-xs-4" id="divsnack">
                                       <input class="form-control" type="number" name="snacksno" value="0" id="snackquan"> 
                                    </div>
                                 </div>
                              </div>
                           </div>


















                           <div class="order-row bg-white">
                              <div class="widget-body">
                                 <div class="title-row">Beverage Items <span class="pull-right" id="drinkpriceid">0</span></a></div>
                                 <div class="form-group row no-gutter" id="drinkdiv">
                                    <div class="col-xs-6">
                                       <select class="form-control b-r-0" id="drinkselect" name="drinkselect">
                                          <option selected disabled >Choose Drinks</option>
                                          <option value="pepsi">Pepsi</option>
                                          <option value="cocacola">Cocacola</option>
                                          <option value="mirinda">Mirinda</option>
                                       </select>
                                    </div>

                                    <div class="col-xs-4">
                                       <select class="form-control b-r-0" id="drinksize" name="drinksize">
                                          <option selected disabled>Choose Size</option>
                                          <option value="250ml">250ml</option>
                                          <option value="400ml">400ml</option>
                                          <option value="600ml">600ml</option>
                                       </select>
                                    </div>

                                    <div class="col-xs-2">
                                        <input class="form-control" type="number" name="drinkquan" value="0" id="drinkquan" placeholder="quantity"> 
                                    </div>
                                 </div>
                              </div>
                           </div>







                           <!-- end:Order row -->
                           <div class="widget-delivery clearfix">
                              <form>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio4" name="ordertype" type="radio" class="custom-control-input" checked="" value="Delivary"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                 </div>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio3" name="ordertype" value="Takeout" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-body">
                              <div class="price-wrap text-xs-center">
                                 <p>TOTAL</p>
                                 <h3 class="value"><strong id="totalofall">{{ $data -> price}}</strong> <span><strong>Tk</strong></span></h3>
                                 <p>Free Shipping</p>
                                 <button type="submit" href="#" class="btn theme-btn btn-lg">Checkout</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                </form>
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->
            </div>
            <!-- end:Container -->
            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                              <figure> <img src="{{URL::to('')}}/front/assets/images/app.png" alt="Right Image"> </figure>
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
                                            <a href="front/assets/#"> <img src="{{URL::to('')}}/front/assets/images/paypal.png" alt="Paypal"> </a>
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
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Modal -->
      
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
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 19:12:33 GMT -->
</html>