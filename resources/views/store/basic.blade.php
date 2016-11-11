<!DOCTYPE html>

<html lang="{{App::getLocale()}}" class=" js canvas no-touch rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg svgclippaths js canvas no-touch rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg svgclippaths">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>{{ config('app.store_title') }}</title>

    <!--SEO Meta Tags-->
    <meta name="description" content="Public Store - Home Delivery Network">
    <meta name="keywords" content="shop, e-commerce, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Theme Author: Rokaux">
    <meta name="author" content="Lead Developer: Geraldo B. Landre">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

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
    <link href="/css/store-extensions/theme.min.css" rel="stylesheet" media="screen">

    <!-- Page Preloading -->
    <script src="/js/store/page-preloading.js"></script>

    <!-- Modernizr -->
    <script src="/js/store/modernizr.custom.js"></script>
</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->
<body class="page-preloading">

<!-- Page Pre-Loader -->
<div class="page-preloader">
    <div class="preloader">
        <img src="/images/preloader.gif" alt="Preloader">
    </div>
</div><!-- .page-preloader -->

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Navbar -->
    <header class="navbar">

        <!-- Navbar Header -->
        <div class="navbar-header">

            <!-- Site Logo -->
            <a href="index.html" class="site-logo visible-desktop">
                <span>Buy Weed Online Canada</span>
                <span class="text-gray"></span> <span></span>
            </a><!-- site-logo.visible-desktop -->
            <a href="index.html" class="site-logo visible-mobile">
                <span>Buy Weed Online Canada</span><span></span>
            </a><!-- site-logo.visible-mobile -->

            <!-- Mobile Menu Toggle -->
            <a href="#" class="mobile-menu-toggle"><i class="material-icons menu"></i></a>
        </div><!-- .navbar-header -->

        <!-- Mobile Menu Wrapper -->
        <div class="mobile-menu-wrapper">

            <!-- Toolbar -->
            <div class="toolbar">
                <a href="#" onclick="showMainNav()">
                    <i class="material-icons person"></i>
                </a>
                <div class="cart-btn">
                    <a href="#" onclick="showCart()"
                       class="toolbar-toggle">
                        <i>
                            <span class="material-icons shopping_basket"></span>
                            @if(count(cart()->products) > 0)
                                <span class="count">{{{ count(cart()->products) }}}</span>
                            @endif
                        </i>
                    </a>
                </div><!-- .cart-btn -->
                <a href="#" class="subscribe-btn"
                   onclick="showContact()">
                    <i class="material-icons mail_outline"></i>
                </a>
            </div><!-- .toolbar -->

            <!-- Main Navigation -->
            <nav class="main-navigation" id="main-nav">
                <ul class="menu">
                    <li class="menu-item-has-children current-menu-item">
                        <a href="{{url('/home')}}">Home</a>
                        <a href="{{url('/store')}}">Shop</a>
                    <li class="menu-item-has-children current-menu-item">
                    </li>
                    <li><a href="{{url('/about')}}">About</a></li>
                    <li><a href="{{url('/faq')}}">FAQ</a></li>
                    <li><a href="{{url('/register')}}">Register</a></li>
                    <li><a href="{{url('/blog')}}">Blog</a></li>
                </ul><!-- .menu -->

            </nav><!-- .main-navigation -->

            <nav class="main-navigation" id="contact-nav"
                 style="display: none;">
                @include('store.parts.contact')
            </nav>

            <!-- Cart -->
            <div class="toolbar-section" id="cart" style="display: none;">
                <div class="shopping-cart">
                    @include('store.parts.cart')
                </div>
                <!-- .shopping-cart -->
                <!-- Subtotal -->
                <div class="cart-subtotal space-bottom" style="padding-left: 15px;">
                    <div class="column">
                        <h3 class="toolbar-title">Subtotal: ${{ cart()->total() }}</h3>
                    </div>
                </div>
                <!-- .subtotal -->
                <!-- Buttons -->
                <div class="text-center">
                    @if(cart())
                        <a href="{{ url('store/cart/review') }}" class="btn btn-primary waves-effect waves-light toggle-section">Proceed to
                            Checkout</a>
                    @endif
                </div>
            </div>
            <!-- .toolbar-section#cart -->

        </div><!-- .mobile-menu-wrapper -->
    </header><!-- .navbar -->

    <!-- Main Content Wrapper -->
    <main class="content-wrapper">

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
    </main>

</div><!-- .page-wrapper -->

@yield('js')

<script>
    function showMainNav() {
        $('#main-nav').attr('style', 'display: inline');
        $('#cart').attr('style', 'display: none');
        $('#contact-nav').attr('style', 'display: none');
    }
    function showCart() {
        $('#main-nav').attr('style', 'display: none');
        $('#cart').attr('style', 'display: inline');
        $('#contact-nav').attr('style', 'display: none');
    }
    function showContact() {
        $('#main-nav').attr('style', 'display: none');
        $('#cart').attr('style', 'display: none');
        $('#contact-nav').attr('style', 'display: inline');
    }
</script>

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