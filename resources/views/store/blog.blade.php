@extends('store.basic')

@section('content')

    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->
    <header class="navbar navbar-sticky">

        <!-- Site Logo -->
        <a href="http://localhost:8000/store" class="site-logo visible-desktop">
            <span>[</span> HDN
            <span class="text-gray">/</span>
            STORE <span>]</span>
        </a><!-- site-logo.visible-desktop -->
        <a href="http://localhost:8000/store" class="site-logo visible-mobile">
            <span>[</span> M <span>]</span>
        </a><!-- site-logo.visible-mobile -->

        <!-- Language Switcher -->
        <div class="lang-switcher">
            <div class="lang-toggle">
                <img src="./Public Store _ Home Delivery Network_files/GB.png" alt="English">
                <i class="material-icons arrow_drop_down"></i>
                <ul class="lang-dropdown">
                    <li><a href="http://localhost:8000/#"><img src="./Public Store _ Home Delivery Network_files/FR.png" alt="French">FR</a></li>
                    <li><a href="http://localhost:8000/#"><img src="./Public Store _ Home Delivery Network_files/DE.png" alt="German">DE</a></li>
                    <li><a href="http://localhost:8000/#"><img src="./Public Store _ Home Delivery Network_files/IT.png" alt="Italian">IT</a></li>
                </ul>
            </div>
        </div><!-- .lang-switcher -->

        <!-- Toolbar -->
        <div class="toolbar">
            <div class="inner">
                <a href="http://localhost:8000/#menu" class="toolbar-toggle active"><i class="material-icons menu"></i></a>
                <a href="http://localhost:8000/#account" class="toolbar-toggle"><i class="material-icons person"></i></a>
                <a href="http://localhost:8000/#cart" class="toolbar-toggle">
                    <i>
                        <span class="material-icons shopping_basket"></span>
                    </i>
                </a>
            </div>
        </div><!-- .toolbar -->

        <!-- Toolbar Dropdown -->
        <div class="toolbar-dropdown open">

            <!-- Menu -->
            <div class="toolbar-section current" id="menu">
                <div class="inner">
                    <ul class="main-navigation space-bottom">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="http://localhost:8000/#">Home</a>
                            <ul class="sub-menu">
                                <li class="current-menu-item"><a href="http://localhost:8000/store">Home</a></li>


                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="http://localhost:8000/#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="http://localhost:8000/shop-fullwidth-sl.html">Full Width Sidebar Left</a></li>
                                <li><a href="http://localhost:8000/shop-fullwidth-sr.html">Full Width Sidebar Right</a></li>
                                <li><a href="http://localhost:8000/shop-fullwidth-ft.html">Full Width Filters Top</a></li>
                                <li><a href="http://localhost:8000/shop-boxed-sl.html">Boxed Sidebar Left</a></li>
                                <li><a href="http://localhost:8000/shop-boxed-sr.html">Boxed Sidebar Right</a></li>
                                <li><a href="http://localhost:8000/shop-boxed-ft.html">Boxed Filters Top</a></li>
                                <li><a href="http://localhost:8000/shop-single.html">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost:8000/blog.html">Blog</a></li>
                        <li><a href="http://localhost:8000/about.html">About</a></li>
                        <li><a href="http://localhost:8000/contacts.html">Contacts</a></li>
                        <li><a href="http://localhost:8000/faq.html">FAQ</a></li>
                        <li><a href="http://localhost:8000/elements.html">Elements</a></li>
                    </ul><!-- .main-navigation -->
                    <ul class="list-icon text-sm">
                        <li>
                            <i class="material-icons location_on"></i>
                            45 Park Avenue, Apt. 303<br>New York, NY 10016, USA
                        </li>
                        <li>
                            <i class="material-icons phone"></i>
                            001 (917) 555-4836
                        </li>
                        <li>
                            <i class="material-icons email"></i>
                            <a href="mailto:info@homedeliverynetwork.ca">info@homedeliverynetwork.ca</a>
                        </li>
                        <li>
                            <i class="socicon-skype"></i>
                            <a href="http://localhost:8000/#">skype_id</a>
                        </li>
                    </ul><!-- .list-icon -->
                    <span class="text-sm display-inline" style="margin-bottom: 6px;">Social accounts: &nbsp;&nbsp;</span>
                    <div class="social-bar display-inline">
                        <a href="http://localhost:8000/#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="http://localhost:8000/#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                            <i class="socicon-googleplus"></i>
                        </a>
                        <a href="http://localhost:8000/#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="http://localhost:8000/#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                            <i class="socicon-instagram"></i>
                        </a>
                    </div>
                </div><!-- .inner -->
            </div><!-- .toolbar-section#menu -->

            <!-- Account (Login) -->
            <div class="toolbar-section" id="account">
                <h3 class="toolbar-title space-bottom">You are not logged in.</h3>
                <div class="inner">
                    <form method="post" class="login-form" role="form" action="http://localhost:8000/login">
                        <input type="hidden" name="_token" value="ug072mlSDPDQcv7jWzi38ootRuMWMfz0g3Blyh9m">
                        <input type="email" class="form-control" placeholder="E-mail Address" id="email" name="email" required="">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="">
                        <div class="form-footer">
                            <div class="rememberme">
                                <label class="checkbox">
                                    <div class="icheckbox checked">
                                        <div class="icheckbox"><input type="checkbox" name="remember" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                    </div>
                                    Remember me
                                </label>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Login
                                </button>
                            </div>
                        </div>
                    </form><!-- .login-form -->
                    <p class="text-sm space-top">Don’t have an account? <a href="http://localhost:8000/register" class="toggle-section">Signup
                            here</a></p>
                </div><!-- .inner -->
            </div><!-- .toolbar-section#account -->

            <!-- Cart -->
            <div class="toolbar-section" id="cart">
                <div class="shopping-cart">
                    Add a product to your shopping cart!



















                    <!-- Subtotal -->
                    <div class="cart-subtotal space-bottom">
                        <div class="column">
                            <h3 class="toolbar-title">Subtotal:</h3>
                        </div>
                        <div class="column">
                            <h3 class="amount">$0</h3>
                        </div>
                    </div><!-- .subtotal -->
                    <!-- Buttons -->
                    <div class="text-right">
                        <a href="http://localhost:8000/#" class="btn btn-default btn-ghost close-dropdown">Continue Shopping</a>
                        <a href="http://localhost:8000/store/cart/review" class="btn btn-primary waves-effect waves-light toggle-section">Proceed to
                            Checkout</a>
                    </div>
                </div><!-- .shopping-cart -->
            </div><!-- .toolbar-section#cart -->

            <!-- Checkout -->
            <div class="toolbar-section" id="checkout">
                <form method="post" class="checkout-form container">
                    <div class="cart-subtotal space-bottom">
                        <div class="column">
                            <h3 class="toolbar-title">Checkout</h3>
                        </div>
                        <div class="column">
                            <h3 class="amount">
                                <small class="hidden-xs">3 items&nbsp;&nbsp;&nbsp;</small>
                                $161.90
                            </h3>
                        </div>
                    </div><!-- .subtotal -->
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="co_f_name" placeholder="First name" required="">
                            <input type="email" class="form-control" name="co_email" placeholder="Email" required="">
                            <input type="text" class="form-control" name="co_address1" placeholder="Address 1" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="co_l_name" placeholder="Last name" required="">
                            <input type="tel" class="form-control" name="co_phone" placeholder="Phone" required="">
                            <input type="text" class="form-control" name="co_address2" placeholder="Address 2">
                        </div>
                    </div><!-- .row -->
                    <input type="text" class="form-control" name="co_company" placeholder="Company">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-element form-select">
                                <select class="form-control" name="co_country">
                                    <option value="">Country</option>
                                    <option value="australia">Australia</option>
                                    <option value="gb">Great Britain</option>
                                    <option value="poland">Poland</option>
                                    <option value="switzerland">Switzerland</option>
                                    <option value="usa">USA</option>
                                </select>
                            </div>
                            <div class="form-element form-select">
                                <select class="form-control" name="co_city">
                                    <option value="">City</option>
                                    <option value="bern">Bern</option>
                                    <option value="london">London</option>
                                    <option value="ny">New York</option>
                                    <option value="warsaw">Warsaw</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-element form-select">
                                <select class="form-control" name="co_state">
                                    <option value="">State</option>
                                    <option value="1">State 1</option>
                                    <option value="2">State 2</option>
                                    <option value="3">State 3</option>
                                    <option value="4">State 4</option>
                                    <option value="5">State 5</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="co_zip" placeholder="ZIP code" required="">
                        </div>
                    </div><!-- .row -->
                    <div class="form-group">
                        <label class="radio radio-inline">
                            <div class="iradio checked"><div class="iradio checked"><input type="radio" name="co_shipping" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            Ship to this address
                        </label>
                        <label class="radio radio-inline">
                            <div class="iradio"><div class="iradio"><input type="radio" name="co_shipping" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            Ship to different address
                        </label>
                    </div><!-- .form-group -->
                    <div class="text-right">
                        <a href="http://localhost:8000/#cart" class="btn btn-default btn-ghost icon-left toggle-section">
                            <i class="material-icons arrow_back"></i>
                            Back To Cart
                        </a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Checkout</button>
                    </div>
                </form><!-- .checkout-form.container -->
            </div><!-- .toolbar-section#checkout -->
        </div><!-- .toolbar-dropdown -->
    </header><!-- .navbar.navbar-sticky -->

    <!-- Hero Slider -->
    <!-- Data API:
      data-loop="true/false" enable/disable looping
      data-autoplay="true/false" enable/disable carousel autoplay
      data-interval="3000" autoplay interval timeout in miliseconds
      Simply add necessary data attribute to the ".hero-carousel" with appropriate value to adjust carousel functionality.
     -->
    <section class="hero-slider" data-loop="true" data-autoplay="true" data-interval="7000">
        <div class="inner owl-carousel owl-theme owl-loaded owl-loading">
            <!-- .slide -->
            <!-- .slide -->
            <!-- .slide -->












            <div class="owl-stage-outer"><div class="owl-stage owl-refresh" style="transform: translate3d(0px, 0px, 0px); transition: 0s;"><div class="owl-item cloned"><div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-7620px, 0px, 0px); transition: 0.45s; width: 13335px;">
                                <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                                    <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                                        <div class="container text-center padding-top-3x">
                                            <span class="h1 from-bottom">Sonho de Valsa</span><br>
                                            <span class="h2 from-bottom"><span class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                            <a href="http://localhost:8000/store/cart/add/1/1" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                                Add to Cart
                                                <i class="material-icons arrow_forward"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>




























































































                            </div>
                        </div></div><div class="owl-item"><div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-7620px, 0px, 0px); transition: 0.45s; width: 13335px;">
                                <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                                    <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                                        <div class="container text-center padding-top-3x">
                                            <span class="h1 from-bottom">Sonho de Valsa</span><br>
                                            <span class="h2 from-bottom"><span class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                            <a href="http://localhost:8000/store/cart/add/1/1" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                                Add to Cart
                                                <i class="material-icons arrow_forward"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>




























































































                            </div>
                        </div></div><div class="owl-item cloned"><div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-7620px, 0px, 0px); transition: 0.45s; width: 13335px;">
                                <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                                    <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                                        <div class="container text-center padding-top-3x">
                                            <span class="h1 from-bottom">Sonho de Valsa</span><br>
                                            <span class="h2 from-bottom"><span class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                            <a href="http://localhost:8000/store/cart/add/1/1" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                                Add to Cart
                                                <i class="material-icons arrow_forward"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>




























































































                            </div>
                        </div></div></div></div></div><!-- .inner -->
    </section><!-- .hero-slider -->

    <!-- Content Wide -->
    <section class="container-fluid padding-top-3x">






























        <div class="row padding-top">





































            <!-- Products -->
            <div class="col-lg-9 col-md-8">
                <!-- Nav Tabs -->
                <ul class="nav-tabs text-center" role="tablist">
                    <li class="active"><a href="http://localhost:8000/#newcomers" role="tab" data-toggle="tab">New Arrivals</a></li>
                    <li><a href="http://localhost:8000/#toprated" role="tab" data-toggle="tab">Top Rated</a></li>
                    <li><a href="http://localhost:8000/#onsale" role="tab" data-toggle="tab">On Sale</a></li>
                </ul><!-- .nav-tabs -->

                <!-- Tab Panes -->
                <div class="tab-content">

                    <!-- #newcomers -->
                    <div role="tabpanel" class="tab-pane transition fade scale in active" id="newcomers">
                        <div class="row space-top-half">































                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/gift-box-freedigital.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="JavaScript:addToChart(1)" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Sonho de Valsa</a></h3>
                                        <span class="shop-item-price">
                                            $50.00
                                          </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->


























































                        </div><!-- .row -->























































































































                    </div><!-- .tab-pane#newcomers -->

                    <!-- #toprated -->
                    <div role="tabpanel" class="tab-pane transition fade scale" id="toprated">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th09.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Leather Case</a></h3>
                                        <span class="shop-item-price">
                        $118.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th10.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Concrete Lamp</a></h3>
                                        <span class="shop-item-price">
                        $85.90
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_half"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th11.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Stylish Chair</a></h3>
                                        <span class="shop-item-price">
                        $417.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th12.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Desktop Light</a></h3>
                                        <span class="shop-item-price">
                        $245.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th13.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Storage Jar</a></h3>
                                        <span class="shop-item-price">
                        $19.80
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_half"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th14.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Ceramic Watch</a></h3>
                                        <span class="shop-item-price">
                        $299.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_half"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th15.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Tissue Holder</a></h3>
                                        <span class="shop-item-price">
                        $76.40
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                      <span class="item-rating text-warning">
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star"></i>
                        <i class="material-icons star_border"></i>
                        <i class="material-icons star_border"></i>
                      </span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th16.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Pendant Lamp</a></h3>
                                        <span class="shop-item-price">
                        $27.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                    </div><!-- .tab-pane#toprated -->

                    <!-- #onsale -->
                    <div role="tabpanel" class="tab-pane transition fade scale" id="onsale">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/#" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th05.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/#">Wall Clock</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$69.00</span>
                        $48.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/#" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th06.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/#">LED Lighting</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$155.00</span>
                        $130.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/#" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th04.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/#">Alarm Clock</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$225.00</span>
                        $178.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/#" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th08.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/#">Hook Basket</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$180.00</span>
                        $112.35
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th01.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Storage Box</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$49.00</span>
                        $38.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th07.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Sunglasses</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$122.00</span>
                        $99.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th09.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Leather Case</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$160.00</span>
                        $118.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <span class="shop-label text-danger">Sale</span>
                                        <a href="http://localhost:8000/shop-single.html" class="item-link"></a>
                                        <img src="./Public Store _ Home Delivery Network_files/th02.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="http://localhost:8000/#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="http://localhost:8000/#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="http://localhost:8000/shop-single.html">Shoulder Bag</a></h3>
                                        <span class="shop-item-price">
                        <span class="old-price">$199.00</span>
                        $125.00
                      </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                        </div><!-- .row -->
                    </div><!-- .tab-pane#onsale -->
                </div><!-- .tab-content -->
            </div><!-- .col-lg-9.col-md-8 -->
        </div><!-- .row -->
    </section><!-- .container-fluid -->

    <!-- Brands -->
    <section class="container padding-top-2x padding-bottom">
        <hr>
        <h3 class="text-center padding-top-2x">More brands</h3>
        <div class="row padding-top">
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="http://localhost:8000/#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="./Public Store _ Home Delivery Network_files/01.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="http://localhost:8000/#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="./Public Store _ Home Delivery Network_files/02.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="http://localhost:8000/#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="./Public Store _ Home Delivery Network_files/03.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="http://localhost:8000/#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="./Public Store _ Home Delivery Network_files/04.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="http://localhost:8000/#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="./Public Store _ Home Delivery Network_files/05.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
            <!-- Brand -->
            <div class="col-sm-4 col-xs-6">
                <a href="http://localhost:8000/#" class="brand">
                    <div class="brand-logo opacity-75">
                        <img src="./Public Store _ Home Delivery Network_files/06.svg" alt="Brand">
                    </div>
                    <p class="brand-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est corrupti
                        sapiente itaque.</p>
                </a>
            </div>
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Video Popup -->
    <div class="fw-section space-top-2x padding-top-3x padding-bottom-3x" style="background-image: url(/images/store/video_bg.jpg);">
        <div class="container padding-top-3x padding-bottom-3x text-center">
            <div class="space-top-3x space-bottom">
                <!-- Add ".light-skin" class to alter appearance. -->
                <a href="https://player.vimeo.com/video/135832597?color=77cde3&amp;title=0&amp;byline=0&amp;portrait=0" class="video-popup-btn">
                    <i class="material-icons play_arrow"></i>
                </a>
            </div>
            <p class="space-bottom-2x">M-Store - your reliable partner.</p>
        </div>
    </div><!-- .fw-section -->

    <!-- Features -->
    <section class="container space-top space-bottom padding-top-3x padding-bottom-3x">
        <div class="row">
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons location_on"></i>
                    </div>
                    <h4 class="feature-title">Free World-Wide Shipping</h4>
                    <p class="feature-text">Free shipping on all orders over $100</p>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons autorenew"></i>
                    </div>
                    <h4 class="feature-title">Money Back Guarantee</h4>
                    <p class="feature-text">We return money within 30 days</p>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons headset_mic"></i>
                    </div>
                    <h4 class="feature-title">24/7 Online Support</h4>
                    <p class="feature-text">Friendly 24/7 customer support</p>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-3 col-sm-6">
                <div class="feature text-center">
                    <div class="feature-icon">
                        <i class="material-icons credit_card"></i>
                    </div>
                    <h4 class="feature-title">Interac e-Transfer</h4>
                    <p class="feature-text">
                        We are compatible with <a href="http://www.interac.ca/en/" target="_blank">Interac</a>
                    </p>
                </div>
            </div>
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Footer -->
    <footer class="footer">
        <div class="column">
            <p class="text-sm">Need support? Call <span class="text-primary">001 (917) 555-4836</span></p>
            <div class="social-bar text-center space-bottom">
                <a href="http://localhost:8000/#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                    <i class="socicon-skype"></i>
                </a>
                <a href="http://localhost:8000/#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                    <i class="socicon-facebook"></i>
                </a>
                <a href="http://localhost:8000/#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                    <i class="socicon-googleplus"></i>
                </a>
                <a href="http://localhost:8000/#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                    <i class="socicon-twitter"></i>
                </a>
                <a href="http://localhost:8000/#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                    <i class="socicon-instagram"></i>
                </a>
            </div><!-- .social-bar -->
            <p class="copyright">© 2016. Made with <i class="text-danger material-icons favorite"></i> by rokaux.</p>
        </div><!-- .column -->
        <div class="column">
            <h3 class="widget-title">
                Subscription
                <small>To receive latest offers and discounts from the shop.</small>
            </h3>
            <form action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;id=1194bb7544" method="post" target="_blank" class="subscribe-form" novalidate="">
                <input type="email" class="form-control" name="EMAIL" placeholder="Your e-mail">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1" value=""></div>
                <button type="submit"><i class="material-icons send"></i></button>
            </form>
        </div><!-- .column -->
        <div class="column">
            <h3 class="widget-title">
                Payment Method
                <small>We support Interac.</small>
            </h3>
            <div class="cards"><img src="./Public Store _ Home Delivery Network_files/interac-e-transfer.jpg" alt="Interac e-Transfer"></div>
            <!-- Scroll To Top Button -->
            <div class="scroll-to-top-btn visible"><i class="material-icons trending_flat"></i></div>
        </div><!-- .column -->
    </footer><!-- .footer -->

@endsection