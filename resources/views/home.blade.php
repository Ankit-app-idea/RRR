    <!DOCTYPE html>
    <html lang="en">     
      <head>
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
                     <a class="navbar-brand font-36-pla-reg-2" href="index.html"><img src="{{asset('public/front/assets/dist/img/logo.png')}}" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html" >Home</a></li>
                            <li><a href="listing-page.html" >COLLECTIONS</a></li>
                    <li><a href="blog-listing.html" >BLOG</a></li>
                    <li><a href="about-us.html" >ABOUT</a></li>
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
            <li>
                    <a href="login.html" class="header_login_link">LOGIN</a>
            </li>
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






    <div class="banner">
            <div class="owl-carousel owl-theme dr-main-slider">
        <div class="item">
            <img src="{{asset('public/front/assets/dist/img/banner/2.jpg')}}" alt="" class="img-responsive">
            <!-- <div class="text">
                    <h4>new   <span>50%<br/> <small>discount</small></span></h4>
                    <h2>Spring</h2>
                    <h3>~ MAKE YOUR CLOSET THE UNIQUE ONE ~</h3>
                    <a href="#">GET THE LOOK</a>
            </div> --><!-- /.text --> 
            <div class="text2">
                    <h2>Hot Sale!</h2> 
                    <p>Spring & winter</p>
                    <a href="#">GET THE LOOK</a>
            </div><!-- /.text2 -->  
        </div>
        <div class="item">  
            <img src="{{asset('public/front/assets/dist/img/banner/3.jpg')}}" alt="" class="img-responsive">
            <div class="text2">
                    <h2>Hot Sale!</h2> 
                    <p>Spring & winter</p>
                    <a href="#">GET THE LOOK</a>
            </div><!-- /.text2 -->  
        </div>
            </div> <!-- /.dr-main-slider --> 
    </div><!-- banner -->



    <div class="pickupdate">
        <div class="container-fluid"> 
            <form>
                <div class="date-display">
                    <div class="form-date">
                        <div id="houston-component"></div>
                        <div class="mydiv"></div>
                    </div>
                  <div class="form-date">
                    <select class="rq-rental-select2 rq-custom-select">
                            <option value="AL">Size</option>
                            <option value="AL">38</option>
                            <option value="WY">39</option>
                            <option value="WY">40</option>
                            <option value="WY">41</option>
                            <option value="WY">42</option>
                            <option value="WY">43</option>
                    </select>
                  </div>
                    <div class="btn-search">
                        <button>Search</button>  	
                    </div>
                </div>  
            </form>
        </div><!-- /.container-fluit -->
    </div><!-- /.pickupdate -->



    <div class="work-procedure base-padd">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="inner">
                        <a href="#"><img src="{{asset('public/front/assets/dist/img/work-procedure/1.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">RENT</h3>
                        <p class="font-16-for-reg-0"><a href="#">Lorem ipsum </a>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->	
                </div> <!-- /.col-md-3  -->
                <div class="col-md-4">
                    <div class="inner">
                        <a href="#"><img src="{{asset('public/front/assets/dist/img/work-procedure/2.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">WEAR</h3>
                        <p class="font-16-for-reg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <a href="#"> do eiusmod </a> tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->	
                </div> <!-- /.col-md-3  -->
                <div class="col-md-4">
                    <div class="inner">
                        <a href="#"><img src="{{ asset('public/front/assets/dist/img/work-procedure/3.png')}}" alt="" class="img-responsive"></a>
                        <h3 class="font-30-for-reg-0">RETURN</h3>
                        <p class="font-16-for-reg-0">Lorem ipsum dolor sit amet,<a href="#"> consectetur</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div><!-- /.inner -->	
                </div> <!-- /.col-md-3  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.work-procedure -->



    <div class="content base-padd">
            <div class="container-fulid">
                    <div class="content-wrapper">
                            <div class="rq-rental-item-column width-32per">
                                <div class="rq-rental-item width-32per">
                                    <div class="img-wrapper">
                                        <img src="{{asset('public/front/assets/dist/img/content/1.jpg')}}" alt=""/>
                                        <div class="hover">
                                                <h3 class="font-40-pla-reg-2"><a href="#">Street Style</a></h3>
                                                <p class="font-14-for-reg-2">black is our new trend</p>
                                                <a href="listing-page.html" class="font-22-for-reg-2">Shop Now</a>
                                        </div><!-- /.hover -->
                                    </div><!-- /.img-wrapper -->
                                </div><!-- /.rq-rental-item -->

                                <div class="rq-rental-item width-32per">
                                    <div class="img-wrapper">
                                        <img src="{{asset('public/front/assets/dist/img/content/2.jpg')}}" alt=""/>
                                        <div class="hover">
                                            <h3 class="font-40-pla-reg-2"><a href="#">Street Style</a></h3>
                                            <p class="font-14-for-reg-2">black is our new trend</p>
                                            <a href="listing-page.html" class="font-22-for-reg-2">Shop Now</a>
                                        </div><!-- /.hover -->
                                    </div><!-- /.img-wrapper -->
                                </div><!-- /.rq-rental-item -->
                            </div>

                            <div class="rq-rental-item-column width-36per">
                                <div class="rq-rental-item width-36per">
                                    <div class="img-wrapper">
                                        <img src="{{asset('public/front/assets/dist/img/content/3.jpg')}}" alt=""/>
                                        <div class="hover">
                                            <h3 class="font-40-pla-reg-2"><a href="#">Street Style</a></h3>
                                            <p class="font-14-for-reg-2">black is our new trend</p>
                                            <a href="listing-page.html" class="font-22-for-reg-2">Shop Now</a>
                                        </div><!-- /.hover -->
                                    </div><!-- /.img-wrapper -->
                                </div><!-- /.rq-rental-item -->

                                <div class="rq-rental-item width-36per">
                                    <div class="img-wrapper">
                                        <img src="{{asset('public/front/assets/dist/img/content/4s.jpg')}}" alt=""/>
                                    </div><!-- /.img-wrapper -->
                                </div><!-- /.rq-rental-item -->

                                    <div class="rq-rental-item width-36per">
                                            <div class="img-wrapper fix-height">
                                                <img src="{{asset('public/front/assets/dist/img/content/5.jpg')}}" alt=""/>
                                                <div class="hover">
                                                        <h3 class="font-40-pla-reg-2"><a href="#">Street Style</a></h3>
                                                        <p class="font-14-for-reg-2">black is our new trend</p>
                                                        <a href="listing-page.html" class="font-22-for-reg-2">Shop Now</a>
                                                </div><!-- /.hover -->
                                            </div><!-- /.img-wrapper -->
                                    </div><!-- /.rq-rental-item -->
                            </div>

                            <div class="rq-rental-item-column width-32per">
                                    <div class="rq-rental-item width-32per">
                                            <div class="img-wrapper">

                                                    <img src="{{asset('public/front/assets/dist/img/content/6.jpg')}}" alt=""/>
                                                    <div class="hover">
                                                            <h3 class="font-40-pla-reg-2"><a href="#">Street Style</a></h3>
                                                            <p class="font-14-for-reg-2">black is our new trend</p>
                                                            <a href="listing-page.html" class="font-22-for-reg-2">Shop Now</a>
                                                    </div><!-- /.hover -->
                                            </div><!-- /.img-wrapper -->
                                    </div><!-- /.rq-rental-item -->

                                    <div class="rq-rental-item width-32per" >
                                            <div class="img-wrapper">
                                                    <img src="{{asset('public/front/assets/dist/img/content/7.jpg')}}" alt=""/>
                                                    <div class="hover">
                                                            <h3 class="font-40-pla-reg-2"><a href="#">Street Style</a></h3>
                                                            <p class="font-14-for-reg-2">black is our new trend</p>
                                                            <a href="listing-page.html" class="font-22-for-reg-2">Shop Now</a>
                                                    </div><!-- /.hover -->
                                            </div><!-- /.img-wrapper -->
                                    </div><!-- /.rq-rental-item -->
                            </div>

                    </div><!-- /.content-wrapper -->
            </div><!-- /.container-fulid -->
    </div><!-- /.content -->



    <div class="join-us">
            <div class="container">
                    <div class="row">
                            <div class="col-sm-5">
                            <a href="" class="btn transparent">Join us</a>
                            <a href="" class="btn notrans">Buy Now</a>
                            </div>
                            <div class="col-sm-7">
                                    <span class="font-30-pla-reg-2">
                                            DO YOU LIKE <a href="#">RENT ROCK REPEAT</a> <br/>
                                            BUY IT NOW AND TRY EVERYTHING...
                                    </span>	
                            </div>
                    </div>

            </div><!-- /.container -->
    </div><!-- /.join-us -->







    <div class="favorites base-padd">
    <h2>OUR FAVOURITES</h2>
            <div class="container">
                    <div class="owl-favorites owl-carousel owl-theme">
                <div class="item">
                    <figure> 
                            <img src="{{asset('public/front/assets/dist/img/favorites/1.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">LACE</h3>	
                    <p class="font-16-for-reg-0">Black & White</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                            <div class="item">
                    <figure>
                            <img src="{{ asset('public/front/assets/dist/img/favorites/2.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">PARTY</h3>	
                    <p class="font-16-for-reg-0">SASSA’s Collection</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{ asset('public/front/assets/dist/img/favorites/2.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">GRACE</h3>	
                    <p class="font-16-for-reg-0">Black & White</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{ asset('public/front/assets/dist/img/favorites/wish.png')}}"></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{ asset('public/front/assets/dist/img/favorites/4.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">PINK</h3>	
                    <p class="font-16-for-reg-0">Black & White</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{ asset('public/front/assets/dist/img/favorites/5.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">WHITE</h3>	
                    <p class="font-16-for-reg-0">SASSA’s Collection</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" >assets/dist/img/favorites/wish.></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{ asset('public/front/assets/dist/img/favorites/1.png')}}" alt="">>
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">LACE</h3>	
                    <p class="font-16-for-reg-0">Black & White</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{ asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                            <div class="item">
                    <figure>
                            <img src="{{ asset('public/front/assets/dist/img/favorites/2.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">PARTY</h3>	
                    <p class="font-16-for-reg-0">SASSA’s Collection</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{ asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{asset('public/front/assets/dist/img/favorites/1.png')}}"><a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">GRACE</h3>	
                    <p class="font-16-for-reg-0">Black & White</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{asset('public/front/assets/dist/img/favorites/4.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">PINK</h3>	
                    <p class="font-16-for-reg-0">Black & White</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

                <div class="item">
                    <figure>
                            <img src="{{asset('public/front/assets/dist/img/favorites/5.png')}}" alt="">
                            <a href="booking.html">View</a>
                    </figure>
                    <h3 class="font-20-for-reg-0">WHITE</h3>	
                    <p class="font-16-for-reg-0">SASSA’s Collection</p>
                    <div class="elements">
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO WISHLIST</span>
                                    <a href="#" ><img src="{{asset('public/front/assets/dist/img/favorites/wish.png')}}" alt=""></a>	
                            </div><!-- /.tool-tip -->

                            <span class="font-25-for-reg-0">$99</span>
                            <div class="tool-tip">
                                    <span class="tooltiptext">ADD TO FAVORITE</span>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div><!-- /.tool-tip -->

                    </div><!-- /.elements -->
                </div><!-- /.item -->

        </div><!-- /.owl-favorites -->
            </div><!-- /.container -->
    </div><!-- /.favorites -->



    <div class="newsletter base-padd">
            <h2>SIGN UP FOR OUR NEWSLETTER</h2>
            <div class="container">
                    <form class="form-inline">
                      <div class="form-group first">
                        <input type="text" class="form-control" placeholder="Jane Doe">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="jane.doe@example.com">
                      </div>
                      <a href="#" class="btn transparent">Join</a>
                      <a href="#" class="btn notrans">Login</a>
                    </form><!-- /.form-inline -->
            </div><!-- container -->
    </div><!-- /.newsletter -->



    <div class="opinion base-padd">
            <div class="container">
                    <div class="owl-opinion owl-carousel owl-theme">
        <div class="item">
            <img src="{{asset('public/front/assets/dist/img/opinion/1.png')}}" alt="">
            <p class="font-14-ope-reg-0">Jonathen Nora, CEO-AURORA inc</p>
            <h3>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </h3>
            <p class="edit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ap into electronic typesetting,” remaining essentially unchanged.</p>
        </div><!-- /.item -->
        <div class="item">
            <img src="{{asset('public/front/assets/dist/img/opinion/1.png')}}" alt="">
            <p class="font-14-ope-reg-0">Jonathen Nora, CEO-AURORA inc</p>
            <h3>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </h3>
            <p class="edit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ap into electronic typesetting,” remaining essentially unchanged.</p>
        </div><!-- /.item -->
        <div class="item">
            <img src="{{asset('public/front/assets/dist/img/opinion/1.png')}}" alt="">
            <p class="font-14-ope-reg-0">Jonathen Nora, CEO-AURORA inc</p>
            <h3>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
            </h3>
            <p class="edit">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ap into electronic typesetting,” remaining essentially unchanged.</p>
        </div><!-- /.item -->
    </div><!-- /.owl-opinion -->
            </div><!-- /.container -->
    </div><!-- /.opinion -->





    <div class="sponsors base-padd">
            <div class="container-fluid wrapper">
                <div class="sponsors-carousel owl-theme owl-carousel">
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/1.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/2.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/3.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/4.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/5.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/6.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/2.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/5.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/4.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/3.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/2.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/6.png')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{asset('public/front/assets/dist/img/sponsors/1.png')}}" alt=""></a></div>
                </div><!-- /.sponsors-carousel	 -->
            </div><!-- /.container-fluid -->
    </div><!-- /.sponsors -->	



    <div class="community base-padd">
            <h2>Our Community</h2>
            <div class="container-fluid wrapper">
                            <div class="row">
                                    <div class="col-md-5 mb-30">
                                            <div class="row">
                                                    <div class="col-sm-6">
                                                            <div class="element">
                                                                    <picture>
                                                                             <source srcset="../assets/dist/img/community/1-big.jpg" media="(max-width: 991px)">
                                                                             <img src="{{asset('public/front/assets/dist/img/community/1.jpg')}}" alt="1"/>
                                                                            </picture>
                                                                    <div class="caption">
                                                                            <a href="#" class="font-14-ope-reg-1"><span>"</span>Lorem Ipsum is simply dummy text of the printing and type setting industry.<span>"</span></a>
                                                                    </div><!-- /.caption -->
                                                            </div><!-- /.element -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <div class="element">
                                                            <picture>
                                                             <source srcset="../assets/dist/img/community/2-big.jpg" media="(max-width: 991px)">
                                                             <img src="{{asset('public/front/assets/dist/img/community/2.jpg')}}" alt=""/>
                                                            </picture>

                                                                    <div class="caption">
                                                                            <a href="#" class="font-14-ope-reg-1"><span>"</span>Lorem Ipsum is simply dummy text of the printing and type setting industry.<span>"</span></a>
                                                                    </div><!-- /.caption -->
                                                            </div><!-- /.element -->
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-3 mb-30">
                                            <div class="element">
                                                    <picture>
                                                            <source srcset="../assets/dist/img/community/3-big.jpg" media="(max-width: 991px)">
                                                            <img src="{{asset('public/front/assets/dist/img/community/3.jpg')}}" alt=""/>
                                                    </picture>
                                                    <div class="caption">
                                                            <a href="#" class="font-14-ope-reg-1"><span>"</span>Lorem Ipsum is simply dummy text of the printing and type setting imply dummy text of the  industry.<span>"</span></a>
                                                    </div><!-- /.caption -->
                                            </div><!-- /.element -->
                                    </div>
                                    <div class="col-md-4 mb-30">
                                            <div class="row">
                                                    <div class="col-sm-6">
                                                            <div class="element">
                                                                    <picture>
                                                                            <source srcset="../assets/dist/img/community/4-big.jpg" media="(max-width: 991px)">
                                                                            <img src="{{asset('public/front/assets/dist/img/community/4.jpg')}}" alt=""/>
                                                                    </picture>
                                                                    <div class="caption">
                                                                            <a href="#" class="font-14-ope-reg-1"><span>"</span>Lorem Ipsum is simply dummy text of the printing.<span>"</span></a>
                                                                    </div><!-- /.caption -->
                                                            </div><!-- /.element -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <div class="element">
                                                                    <picture>
                                                                            <source srcset="../assets/dist/img/community/5-big.jpg" media="(max-width: 991px)">
                                                                            <img src="{{asset('public/front/assets/dist/img/community/5.jpg')}}" alt=""/>
                                                                    </picture>
                                                                    <div class="caption">
                                                                            <a href="#" class="font-14-ope-reg-1"><span>"</span>Lorem Ipsum is simply dummy text of the printing.<span>"</span></a>
                                                                    </div><!-- /.caption -->
                                                            </div><!-- /.element -->
                                                    </div>
                                            </div>
                                    </div>
                            </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.community -->



    <div class="count-up base-padd">
            <div class="container-fluid wrapper">
                    <div class="row">
                    <div class="col-sm-3">
                                    <div class="inner">
                                            <div class="counter" data-count="48"><h1>0</h1></div>	
                                            <h3 class="font-36-for-reg-3">DAILY</h3>
                                            <span class="font-24-for-reg-3">Users</span>
                                    </div><!-- /.inner -->
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-3">
                                    <div class="inner">
                                            <div class="counter" data-count="124"><h1>0</h1></div>	
                                            <h3 class="font-36-for-reg-3">WEEKLY</h3>
                                            <span class="font-24-for-reg-3">Users</span>
                                    </div><!-- /.inner -->
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-3">
                                    <div class="inner">
                                            <div class="counter" data-count="520"><h1>0</h1></div>	
                                            <h3 class="font-36-for-reg-3">MONTHLY</h3>
                                            <span class="font-24-for-reg-3">Users</span>
                                    </div><!-- /.inner -->
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-3">
                                    <div class="inner">
                                            <div class="counter" data-count="2121"><h1>0</h1></div>	
                                            <h3 class="font-36-for-reg-3">YEARLY</h3>
                                            <span class="font-24-for-reg-3">Users</span>
                                    </div><!-- /.inner -->
                            </div><!-- /.col-sm-3 -->

                    </div>
            </div><!-- /.container -->
    </div><!-- /.count-up -->




    <footer class="main-footer">
            <div class="footer">
                    <div class="rq-container"> 
                            <div class="item1">
                                    <a href="index.html" class="font-36-pla-reg-2"><img src="{{asset('public/front/assets/dist/img/logo.png')}}" alt="logo" /></a>
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
                                            <li><a href="service.html">Contact</a></li>
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
