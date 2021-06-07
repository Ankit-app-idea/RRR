<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> RRR - Rent Rock Repeat </title>
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/front/assets/dist/img/favicon-32x32.png')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/front/assets/dist/style/elements.css')}}">
        <link rel="stylesheet" href="{{asset('public/front/assets/dist/style/dateRangePicker.css')}}">
        <link rel="stylesheet" href="{{asset('public/front/assets/dist/style/header.css')}}">
        <link rel="stylesheet" href="{{asset('public/front/assets/dist/style/footer.css')}}">
        <link rel="stylesheet" href="{{asset('public/front/assets/dist/style/blog.css')}}">
    </head>
    <body>

    <!-- ==========================-->
    <!-- LOADER-->
    <!-- ==========================-->
    <div id="gl-circle-loader-wrapper">
      <div id="gl-circle-loader-center">
        <div class="gl-circle-load">
            <img src="{{asset('public/front/assets/dist/img/ploading.gif')}}" alt="Page Loader">
        </div>
      </div>
    </div>


    <!-- ==========================-->
    <!-- SEARCH MODAL-->
    <!-- ==========================-->
    <div class="header-search open-search"> 
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                  <div class="navbar-search">
                      <form class="search-global"> 
                          <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="" />
                          <button class="search-global__btn"><i class="icon stroke icon-Search"></i>
                          </button>
                          <div class="search-global__note">Begin typing your search above and press return to search.</div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <button class="search-close close" type="button"><i class="fa fa-times"></i></button>
    </div>

    <div class="top-bar" id="top_bar"> 
        <div class="container">
            <p class="font-14-ope-reg-0 text-center margin-0">…Enjoy 20% off when you sign up to become a member...</p>
            <i class="ion-ios-close-empty"></i>
        </div><!-- /.container -->
    </div><!-- /.top-bar -->  
    <header class="main-nav" id="stickynav">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand font-36-pla-reg-2" href="{{ url('/')}}"><img src="{{asset('public/front/assets/dist/img/logo.png')}}" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/')}}" >Home</a></li>
                        <li><a href="listing-page.html" >COLLECTIONS</a></li>
                        <li><a href="blog-listing.html" >BLOG</a></li>
                        <li><a href="{{url('about-us')}}" >ABOUT</a></li>
                        <li><a href="how-it-works.html" >How it works</a></li>
                    </ul>


            </div><!-- /.navbar-collapse -->

    </nav>
    <form class="navbar-form dr-search">
        <div class="form-group">
            <a href="#" class="rq_btn_header_search"><i class="ion-ios-search"></i></a>
        </div>
    </form>

    <ul class="nav navbar-nav dr-cart">
        
            @guest
                <li>
                    <a class="header_login_link" href="{{ route('login') }}">LOGIN</a>
                </li>
<!--                @if (Route::has('register'))
                <li>
                    <a class="header_login_link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif-->
            @else
            <li>
                    <a class="header_login_link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ Auth::user()->f_name }} {{ Auth::user()->l_name }} - {{ __('Logout') }}
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            </li>
<!--            <li class="dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->f_name }} {{ Auth::user()->l_name }}
                    </a>
                

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                       
                    </div>
                </li>-->
            @endguest
            <!--<a href="{{url('login')}}" class="">LOGIN</a>-->
        
        <li>
            <a href="#" class="rq-shopping-cart-items-list wishlist">Wishlist <i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
            <div class="rq-shopping-cart-inner-div">
                <h4>Items Recently added</h4>
                   <ul>
                        <li>
                          <div class="wrapper">
                            <a href="#" class="wrapper-img"> <img src="{{asset('public/front/assets/dist/img/content/1.jpg')}}" alt="1"/> </a>
                            <a href="#" class="product-title">White Beard T-Shirt</a>
                            <p>1 x <small> $49.00</small></p>
                            <a href="#" class="subtraction"><i class="ion-ios-close-empty"></i></a>
                          </div><!-- /.wrapper -->
                        </li>
                         <li class="last">
                          <div class="wrapper">
                            <a href="#" class="wrapper-img"> <img src="{{asset('public/front/assets/dist/img/content/7.jpg')}}" alt="1"/> </a>
                            <a href="#" class="product-title">Mercedes Ben C-Class</a>
                            <p>1 x <small> $65.00</small></p>
                            <a href="#" class="subtraction"><i class="ion-ios-close-empty"></i></a>
                          </div><!-- /.wrapper -->
                        </li>
                    </ul>
                </div><!-- /.rq-shopping-cart-inner-div -->
            </li>
            <li>
                <a href="#" class="rq-shopping-cart-items-list">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                <div class="rq-shopping-cart-inner-div">
                  <h4>Items Recently added</h4>
                    <ul>
                        <li>
                            <div class="wrapper">
                                <a href="#" class="wrapper-img"> <img src="{{asset('public/front/assets/dist/img/content/1.jpg')}}" alt="1"/> </a>
                                <a href="#" class="product-title">White Beard T-Shirt</a>
                                <p>1 x <small> $49.00</small></p>
                                <a href="#" class="subtraction"><i class="ion-ios-close-empty"></i></a>
                            </div><!-- /.wrapper -->
                        </li>
                         <li>
                            <div class="wrapper">
                                  <a href="#" class="wrapper-img"> <img src="{{asset('public/front/assets/dist/img/content/7.jpg')}}" alt="1"/> </a>
                                  <a href="#" class="product-title">Mercedes Ben C-Class</a>
                                  <p>1 x <small> $65.00</small></p>
                                  <a href="#" class="subtraction"><i class="ion-ios-close-empty"></i></a>
                            </div><!-- /.wrapper -->
                        </li>
                    </ul>
                    <div class="subtotal">
                      <strong>Subtotal:</strong>
                      <strong>$114.00</strong>
                    </div><!-- /.subtotal -->
                    <div class="view-cart">
                      <a href="cart.html">View Cart</a>
                    </div><!-- /.subtotal -->
                </div><!-- /.rq-shopping-cart-inner-div -->
            </li>
    </ul>
    </header><!-- /.End header -->

            @yield('content')

    <footer class="main-footer">
            <div class="footer">
                    <div class="rq-container"> 
                            <div class="item1">
                                <a href="{{ url('/')}}" class="font-36-pla-reg-2"><img src="{{asset('public/front/assets/dist/img/logo.png')}}" alt="logo" /></a>
                                <div class="get-touch">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div><!-- /.get-touch -->
                            </div><!-- /.item1 -->
                            <div class="item4">
                                    <h3 class="font-18-pla-reg-2">COMPANY</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="listing-page.html">Collections</a></li>
                                        <li><a href="blog-listing.html">Blog</a></li>
                                        <li><a href="how-it-works.html" >How it works</a></li>
                                        <li><a href="{{ url('service')}}">Contact</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="policy.html">Privacy Policy</a></li>
                                        <li><a href="terms.html">Terms & Condition</a></li>
                                    </ul>
                            </div><!-- /.item4 -->
                            <div class="item5">
                                    <h3 class="font-18-pla-reg-2">CONTACT </h3>
                                    <ul class="list-unstyled contact">
                                        <li class="map-marker"><p>Road 3, West side</p>
                                                <p>Texas, USA</p></li>
                                        <li class="phone"><p>+6789870352</p></li>
                                        <li class="mobile"><p>+67800017338829</p></li>
                                        <li class="envelope"><p>rnb@rnb.com</p></li>
                                    </ul>
                            </div><!-- /.item5 -->
                            <div class="item6">
                                    <h3 class="font-18-pla-reg-2">NEWSLETTER</h3>
                                    <p>Sign up for latest updates and offer.</p>
                                    <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter email address...">
                      <button type="submit" class="btn"><i class="ion-ios-arrow-thin-right"></i></button>
                    </div>

                  </form>
                </div><!-- /.item6 -->
            </div><!-- /.rq-container -->
        </div><!-- /.footer -->	
        <div class="bottom-bar">
                <p>Copyright 2021 &copy; <a href="#">RRR</a></p>
        </div><!-- /.bottom-bar -->
    </footer>






      <script src="{{asset('public/front/assets/dist/js/vendor/jquery-3.2.0.min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/bootstrap.min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/countUp.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/owl.carousel.min.js')}}"></script> 
      <script src="{{asset('public/front/assets/dist/js/vendor/ion.rangeSlider.min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/dateRangePicker.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/jquery.flexslider-min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/jquery.nicescroll.min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/select2.min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/lightbox.min.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/vendor/jquery.smooth-scroll.js')}}"></script>
      <script src="{{asset('public/front/assets/dist/js/custom.js')}}"></script>
    </body>
    </html>