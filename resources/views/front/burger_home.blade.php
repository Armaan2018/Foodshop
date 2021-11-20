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
                        <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="front/assets/profile.html">Pick Your favorite food</a></li> <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="front/assets/profile.html">Quantity And Editional Stuffs</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a href="front/assets/checkout.html">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="{{URL::to('')}}/front/assets/images/profile-banner.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p><span class="primary-color"><strong>124</strong></span> Results so far </div>
            </p>
            <div class="col-sm-9">
                <select class="custom-select pull-right">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-field" placeholder="Search your favorite food"> <span class="input-group-btn"> 
                                 <button class="btn btn-secondary search-btn" type="button"><i class="fa fa-search"></i></button> 
                                 </span> </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Barbecuing and Grilling</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Appetizers</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Soup and salads</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Seafood</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Beverages</span> </label>
                                            </li>
                                        </ul>
                                    </form>
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
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Price range
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <div class="range-slider m-b-10"> <span id="ex2CurrentSliderValLabel"> Filter by price:<span id="ex2SliderVal"><strong>35</strong></span>€</span>
                                        <br>
                                        <input id="ex2" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="35" /> </div>
                                </div>
                            </div>
                            <!-- end:Pricing widget -->
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
                                        <li> <a href="front/assets/#" class="tag">
                                    Pizza
                                    </a> </li>
                                        <li> <a href="front/assets/#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="front/assets/#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="front/assets/#" class="tag">
                                    Fish 
                                    </a> </li>
                                        <li> <a href="front/assets/#" class="tag">
                                    Desert
                                    </a> </li>
                                        <li> <a href="front/assets/#" class="tag">
                                    Salad
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                
                                @foreach ($data as $element)
                                     @foreach ($element -> restaurants as $rest)
                               

                                <div style="height: 520px;" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item " >
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image" data-image-src="{{URL::to('')}}/media/burger/{{ $element -> image}}">
                                            <div class="distance"><i class="fa fa-pin"></i>{{ $rest -> distance}}</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="front/assets/#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="{{ route('detail.page.burger',$element -> id) }}">{{$element -> name}}</a></h5>
                                            <div class="product-name">{{$element -> name}}</div>
                                            <div class="price-btn-block"> <span class="price">{{$element -> price}} Tk</span> <a href="{{ route('detail.page.burger',$element -> id) }}" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                        </div>
                                        <div class="restaurant-block">
                                            <div class="left">
                                                <a class="pull-left" href="front/assets/#"> <img src="{{URL::to('')}}/media/restaurant/{{ $rest -> restimg}}" alt="Restaurant logo" width="30px" height="30px"> </a>
                                                <div class="pull-left right-text">
                                                 
                                                      {{-- expr --}}
                                                  
                                                 <a href="#">{{$rest -> restname}}</a>


                                                  <span>{{ $rest -> location}}</span> </div>

                                                  @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                                <!-- Each popular food item starts -->
                              {{--   <div class="col-xs-12">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="front/assets/#" tabindex="-1" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a>
                                            </li>
                                            <li class="page-item active"> <a class="page-link" href="front/assets/#">1 <span class="sr-only">(current)</span></a> </li>
                                            <li class="page-item"><a class="page-link" href="front/assets/#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="front/assets/#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="front/assets/#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="front/assets/#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="front/assets/#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                            <!-- end:right row -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="app-section">
                <div class="app-wrap">
                    <div class="container">
                        <div class="row text-img-block text-xs-left">
                            <div class="container">
                                <div class="col-xs-12 col-sm-6 right-image text-center hidden-xs-down">
                                    <figure> <img src="front/assets/images/app.png" alt="Right Image"> </figure>
                                </div>
                                <div class="col-xs-12 col-sm-6 left-text">
                                    <h3>The Best Food Delivery App</h3>
                                    <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                    <div class="social-btns">
                                        <a href="front/assets/#" class="app-btn apple-button clearfix">
                                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                        </a>
                                        <a href="front/assets/#" class="app-btn android-button clearfix">
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
                                            <a href="front/assets/#"> <img src="front/assets/images/paypal.png" alt="Paypal"> </a>
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
    </div>
    <!-- end:page wrapper -->
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
</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/food_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 19:12:26 GMT -->
</html>