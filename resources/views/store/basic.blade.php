<!DOCTYPE html>

<html lang="{{App::getLocale()}}" class=" js canvas no-touch rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg svgclippaths js canvas no-touch rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg svgclippaths">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Public Store | {{ config('app.name') }}</title>

    <!--SEO Meta Tags-->
    <meta name="description" content="Public Store - Home Delivery Network">
    <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Theme Author: Rokaux">
    <meta name="author" content="Lead Developer: Geraldo B. Landre">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Google Material Icons -->
    <link href="/css/store/material-icons.min.css" rel="stylesheet" media="screen">

    <!-- Brand Icons -->
    <link href="/css/store/socicon.min.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="/css/store/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Theme Styles -->
    <link href="/css/store/theme.min.css" rel="stylesheet" media="screen">

    <!-- Page Preloading -->
    <script src="/js/store/page-preloading.js"></script>

    <!-- Modernizr -->
    <script src="/js/store/modernizr.custom.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->
<body class="page-preloading hasScrollbar loading-done">

<!-- Page Pre-Loader -->
<div class="page-preloader">
    <div class="preloader">
        <img src="/images/preloader.gif" alt="Preloader">
    </div>
</div><!-- .page-preloader -->

<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Navbar -->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page. -->
    <header class="navbar navbar-sticky">

        <!-- Site Logo -->
        <a href="{{ url('/') }}" class="site-logo visible-desktop">
            <span>[</span> {{{ config('app.name') }}}
            <span class="text-gray">/</span>
            Store <span>]</span>
        </a><!-- site-logo.visible-desktop -->
        <a href="{{url('/')}}" class="site-logo visible-mobile">
            <span>[</span> HDN <span>]</span>
        </a><!-- site-logo.visible-mobile -->

        <!-- Language Switcher -->
        {{--<div class="lang-switcher">--}}
            {{--<div class="lang-toggle">--}}
                {{--<img src="/images/en.png" alt="English">--}}
                {{--<i class="material-icons arrow_drop_down"></i>--}}
                {{--<ul class="lang-dropdown">--}}
                    {{--<li><a href="#"><img src="/images/fr.png" alt="French">FR</a></li>--}}
                    {{--<li><a href="#"><img src="/images/de.png" alt="German">DE</a></li>--}}
                    {{--<li><a href="#"><img src="/images/it.png" alt="Italian">IT</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div><!-- .lang-switcher -->--}}

        <!-- Toolbar -->
        <div class="toolbar">
            <div class="inner">
                <a href="#menu" class="toolbar-toggle"><i class="material-icons menu"></i></a>
                <a href="#account" class="toolbar-toggle"><i class="material-icons person"></i></a>
                <a href="#cart" class="toolbar-toggle">
                    <i>
                        <span class="material-icons shopping_basket"></span>
                        @if(count(cart()->products) > 0)
                            <span class="count">{{{ count(cart()->products) }}}</span>
                        @endif
                    </i>
                </a>
            </div>
        </div><!-- .toolbar -->

        <!-- Toolbar Dropdown -->
        <div class="toolbar-dropdown">

            <!-- Menu -->
            <div class="toolbar-section" id="menu">
                <div class="inner">
                    <ul class="main-navigation space-bottom">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li class="current-menu-item"><a href="{{url('/store')}}">Home</a></li>
                                <li class="current-menu-item"><a href="{{url('/about')}}">About</a></li>
                                <li class="current-menu-item"><a href="{{ url('/blog') }}">Blog</a></li>
                                <li class="current-menu-item"><a href="{{ url('/faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        {{--<li class="menu-item-has-children">--}}
                            {{--<a href="#">Shop</a>--}}
                            {{--<ul class="sub-menu">--}}
                                {{--<li><a href="shop-fullwidth-sl.html">Full Width Sidebar Left</a></li>--}}
                                {{--<li><a href="shop-fullwidth-sr.html">Full Width Sidebar Right</a></li>--}}
                                {{--<li><a href="shop-fullwidth-ft.html">Full Width Filters Top</a></li>--}}
                                {{--<li><a href="shop-boxed-sl.html">Boxed Sidebar Left</a></li>--}}
                                {{--<li><a href="shop-boxed-sr.html">Boxed Sidebar Right</a></li>--}}
                                {{--<li><a href="shop-boxed-ft.html">Boxed Filters Top</a></li>--}}
                                {{--<li><a href="shop-single.html">Single Product</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul><!-- .main-navigation -->
                    <ul class="list-icon text-sm">
                        <li>
                            <i class="material-icons location_on"></i>
                            {{{ config('app.address') }}}<br>{{{ config('app.address_complement') }}}
                        </li>
                        <li>
                            <i class="material-icons phone"></i>
                            {{{ config('app.phone') }}}
                        </li>
                        <li>
                            <i class="material-icons email"></i>
                            <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                        </li>
                        <li>
                            <i class="socicon-skype"></i>
                            <a href="#">{{{ config('app.skype_id') }}}</a>
                        </li>
                    </ul><!-- .list-icon -->
                    <span class="text-sm display-inline"
                          style="margin-bottom: 6px;">Social accounts: &nbsp;&nbsp;</span>
                    <div class="social-bar display-inline">
                        @if(config('app.facebook'))
                        <a href="{{{ url(config('app.facebook')) }}}" class="sb-facebook" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Facebook">
                            <i class="socicon-facebook"></i>
                        </a>
                        @endif
                        @if(config('app.gplus'))
                        <a href="{{{ url(config('app.gplus')) }}}" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Google+">
                            <i class="socicon-googleplus"></i>
                        </a>
                        @endif
                        @if(config('app.twitter'))
                        <a href="{{{ url(config('app.twitter')) }}}" class="sb-twitter" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Twitter">
                            <i class="socicon-twitter"></i>
                        </a>
                        @endif
                        @if(config('app.instagram'))
                        <a href="{{{ url(config('app.instagram')) }}}" class="sb-instagram" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="Instagram">
                            <i class="socicon-instagram"></i>
                        </a>
                        @endif
                    </div>
                </div><!-- .inner -->
            </div><!-- .toolbar-section#menu -->

            <!-- Account (Login) -->
            <div class="toolbar-section" id="account">
                @if(Auth::user())
                    <h3 class="toolbar-title space-bottom">Welcome {{{ Auth::user()->name }}} {{{ Auth::user()->last_name }}}.</h3>
                    <p class="text-muted m-b-0 font-13">
                        {{{ Auth::user()->email }}}
                    </p>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div>
                            <img src="{{{ Auth::user()->pictureUrl() }}}" class="img-responsive img-circle" alt="user">
                        </div>
                        <div>
                            <a href="{{ url('/user/profile') }}">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                    Profile
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('/user/settings') }}">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                    Settings
                                </button>
                            </a>
                        </div>
                        <div>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <h3 class="toolbar-title space-bottom">You are not logged in.</h3>
                    <div class="inner">
                        <form method="post" class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <input type="email" class="form-control" placeholder="E-mail Address"
                                   id="email" name="email" required>
                            <input type="password" class="form-control" placeholder="Password"
                                   id="password" name="password" required>
                            <div class="form-footer">
                                <div class="rememberme">
                                    <label class="checkbox">
                                        <div class="icheckbox checked">
                                            <input type="checkbox" name="remember"
                                                   style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
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
                        <p class="text-sm space-top">Don’t have an account? <a href="{{ url('/register') }}" class="toggle-section">Signup
                                here</a></p>
                    </div><!-- .inner -->
                @endif
            </div><!-- .toolbar-section#account -->

            <!-- Cart -->
            <div class="toolbar-section" id="cart">
                <div class="shopping-cart">
                @if(count(cart()->products) > 0)
                    @foreach(cart()->products as $product)
                        <!-- Item -->
                            <div class="item">
                                <a href="shop-single.html" class="item-thumb">
                                    <img src="{{{ $product->pictureUrl() }}}" alt="{{{ $product->name }}}">
                                </a>
                                <div class="item-details">
                                    <h3 class="item-title"><a href="shop-single.html">{{{ $product->name }}}</a></h3>
                                    <h4 class="item-price">${{{ $product->price }}}</h4>
                                    <div class="count-input">
                                        <a class="incr-btn" onclick="decreaseQuantity({{{ $product->id }}})"
                                           data-action="decrease" href="#">–</a>
                                        <input class="quantity" id="quantity_input_{{{ $product->id }}}"
                                               type="text" value="{{{ $product->pivot->quantity }}}">
                                        <a class="incr-btn" onclick="increaseQuantity({{{ $product->id }}})"
                                           data-action="increase" href="#">+</a>
                                    </div>
                                </div>
                                {{Form::open([
                                    'url' => "store/cart/remove/{$product->id}",
                                    'method' => 'delete',
                                    'id' => 'delete' . $product->id,
                                    'name' => 'delete' . $product->id
                                ])}}
                                <a href="#" onclick="document.getElementById('delete{{{ $product->id }}}').submit()"
                                   class="item-remove" data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Remove">
                                    <i class="material-icons remove_shopping_cart"></i>
                                </a>
                                {{Form::close ()}}
                            </div>
                            <!-- .item -->
                        @endforeach
                    @else
                        Add a product to your shopping cart!
                @endif
                {{--<!-- Item -->--}}
                {{--<div class="item">--}}
                {{--<a href="shop-single.html" class="item-thumb">--}}
                {{--<img src="/images/store/item02.jpg" alt="Item">--}}
                {{--</a>--}}
                {{--<div class="item-details">--}}
                {{--<h3 class="item-title"><a href="shop-single.html">Resin Storage Box</a></h3>--}}
                {{--<h4 class="item-price">$38.00</h4>--}}
                {{--<div class="count-input">--}}
                {{--<a class="incr-btn" data-action="decrease" href="#">–</a>--}}
                {{--<input class="quantity" type="text" value="2">--}}
                {{--<a class="incr-btn" data-action="increase" href="#">+</a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<a href="#" class="item-remove" data-toggle="tooltip" data-placement="top" title=""--}}
                {{--data-original-title="Remove">--}}
                {{--<i class="material-icons remove_shopping_cart"></i>--}}
                {{--</a>--}}
                {{--</div><!-- .item -->--}}
                <!-- Subtotal -->
                    <div class="cart-subtotal space-bottom">
                        <div class="column">
                            <h3 class="toolbar-title">Subtotal:</h3>
                        </div>
                        <div class="column">
                            <h3 class="amount" id="amount">${{ cart()->total() }}</h3>
                        </div>
                    </div><!-- .subtotal -->
                    <!-- Buttons -->
                    <div class="text-right">
                        <a href="#" class="btn btn-default btn-ghost close-dropdown">Continue Shopping</a>
                        @if(cart())
                        <a href="{{ url('store/cart/review') }}" class="btn btn-primary waves-effect waves-light toggle-section">Proceed to
                            Checkout</a>
                        @endif
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
                            <input type="text" class="form-control" name="co_f_name" placeholder="First name"
                                   required="">
                            <input type="email" class="form-control" name="co_email" placeholder="Email" required="">
                            <input type="text" class="form-control" name="co_address1" placeholder="Address 1"
                                   required="">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="co_l_name" placeholder="Last name"
                                   required="">
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
                            <div class="iradio checked"><input type="radio" name="co_shipping" checked=""
                                                               style="position: absolute; opacity: 0;">
                                <ins class="iCheck-helper"
                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            Ship to this address
                        </label>
                        <label class="radio radio-inline">
                            <div class="iradio"><input type="radio" name="co_shipping"
                                                       style="position: absolute; opacity: 0;">
                                <ins class="iCheck-helper"
                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            Ship to different address
                        </label>
                    </div><!-- .form-group -->
                    <div class="text-right">
                        <a href="#cart" class="btn btn-default btn-ghost icon-left toggle-section">
                            <i class="material-icons arrow_back"></i>
                            Back To Cart
                        </a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Checkout</button>
                    </div>
                </form><!-- .checkout-form.container -->
            </div><!-- .toolbar-section#checkout -->
        </div><!-- .toolbar-dropdown -->
    </header><!-- .navbar.navbar-sticky -->

    @include('layouts.messages')
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="column">
            <p class="text-sm">Need support? Call <span class="text-primary">{{{ config('app.phone') }}}</span></p>
            <div class="social-bar text-center space-bottom">
                <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="{{{ config('app.skype_id') }}}"
                   data-original-title="Skype">
                    <i class="socicon-skype"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="{{{ config('app.facebook') }}}"
                   data-original-title="Facebook">
                    <i class="socicon-facebook"></i>
                </a>
                <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="{{{ config('app.gplus') }}}"
                   data-original-title="Google+">
                    <i class="socicon-googleplus"></i>
                </a>
                <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="{{{ config('app.twitter') }}}"
                   data-original-title="Twitter">
                    <i class="socicon-twitter"></i>
                </a>
                <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="{{{ config('app.instagram') }}}"
                   data-original-title="Instagram">
                    <i class="socicon-instagram"></i>
                </a>
            </div><!-- .social-bar -->
            <p class="copyright">© {{ date('Y') }}.</p>
        </div><!-- .column -->
        <div class="column">
            <h3 class="widget-title">
                Subscription
                <small>To receive latest offers and discounts from the shop.</small>
            </h3>
            <form action="{{url('store/subscribe') }}"
                  method="post" target="_blank" class="subscribe-form" novalidate="">
                {{csrf_field()}}
                <input type="email" class="form-control" name="subscribe_email" placeholder="Your e-mail">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                          name="b_c7103e2c981361a6639545bd5_1194bb7544"
                                                                                          tabindex="-1" value=""></div>
                <button type="submit"><i class="material-icons send"></i></button>
            </form>
        </div><!-- .column -->
        <div class="column">
            <h3 class="widget-title">
                Payment Method
                <small>We support Interac.</small>
            </h3>
            <div class="cards"><img src="/images/interac/interac-e-transfer.jpg" alt="Interac e-Transfer"></div>
            <!-- Scroll To Top Button -->
            <div class="scroll-to-top-btn"><i class="material-icons trending_flat"></i></div>
        </div><!-- .column -->
    </footer><!-- .footer -->

</div><!-- .page-wrapper -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="/js/store/jquery-2.1.4.min.js"></script>
<script src="/js/store/bootstrap.min.js"></script>
<script src="/js/store/smoothscroll.js"></script>
<script src="/js/store/velocity.min.js"></script>
<script src="/js/store/waves.min.js"></script>
<script src="/js/store/icheck.min.js"></script>
<script src="/js/store/owl.carousel.min.js"></script>
<script src="/js/store/jquery.downCount.js"></script>
<script src="/js/store/magnific-popup.min.js"></script>
<script src="/js/store/scripts.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    function addToCart(productId)
    {
        window.location.replace('{{ url('/store/cart/add') }}' + '/' + productId);
    }

    function increaseQuantity (productId)
    {
        var newQuantity = $('#quantity_input_' + productId).val();

        $.ajax({
            type: 'POST',
            url: '/store/cart/increase/' + productId,
            data: {
                productId: productId
            },
            success: function (data) {
                console.log(data);
                $('#amount').html('$' + data.data['total']);
            },
            error: function (data) {
                console.log('Error:', data);
                // if something wrong decrease again
                $('#quantity_input_' + productId).val(newQuantity);
            }
        });
    }

    function decreaseQuantity (productId)
    {
        var newQuantity = $('#quantity_input_' + productId).val();

        $.ajax({
            type: 'POST',
            url: '/store/cart/decrease/' + productId,
            data: {
                productId: productId
            },
            success: function (data) {
                console.log(data);
                $('#amount').html('$' + data.data['total']);
            },
            error: function (data) {
                console.log('Error:', data);
                // if something wrong increase again
                $('#quantity_input_' + productId).val(newQuantity);
            }
        });
    }
</script>

</body><!-- <body> --></html>