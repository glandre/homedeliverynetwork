@extends('store.basic')

@section('content')

    <!-- Hero Slider -->
    <!-- Data API:
      data-loop="true/false" enable/disable looping
      data-autoplay="true/false" enable/disable carousel autoplay
      data-interval="3000" autoplay interval timeout in miliseconds
      Simply add necessary data attribute to the ".hero-carousel" with appropriate value to adjust carousel functionality.
     -->
    <section class="hero-slider" data-loop="true" data-autoplay="true" data-interval="7000">
        <div class="inner owl-carousel owl-theme owl-loaded">
            <!-- .slide -->
            <!-- .slide -->
            <!-- .slide -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(-7620px, 0px, 0px); transition: 0.45s; width: 13335px;">
                    @foreach(\App\Product::all() as $product)
                    <div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">
                        <div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">
                            <div class="container text-center padding-top-3x">
                                <span class="h1 from-bottom">{{{ $product->name }}}</span><br>
                                <span class="h2 from-bottom"><span
                                            class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                                <a href="{{{ url("/store/cart/add/{$product->id}/1") }}}"
                                   class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                                    Add to Cart
                                    <i class="material-icons arrow_forward"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">--}}
                        {{--<div class="slide" style="background-image: url(/images/store//hero-slider/03.jpg);">--}}
                            {{--<div class="container padding-top-3x">--}}
                                {{--<span class="h1 space-top from-left">Dior Sunglasses</span><br>--}}
                                {{--<span class="h2 from-right"><span class="text-thin">Only <span--}}
                                                {{--class="hidden-xs">today</span></span> <strong>-30%</strong></span><br>--}}
                                {{--<a href="#"--}}
                                   {{--class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">--}}
                                    {{--View Offer--}}
                                    {{--<i class="material-icons arrow_forward"></i>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="owl-item" style="width: 1905px; margin-right: 0px;">--}}
                        {{--<div class="slide" style="background-image: url(/images/store/hero-slider/01.jpg);">--}}
                            {{--<div class="container">--}}
                                {{--<div class="absolute from-top" style="top: 13%;">--}}
                                    {{--<span class="h1 hidden-xs">New SPA<br>Cosmetics</span>--}}
                                {{--</div>--}}
                                {{--<div class="absolute text-right from-bottom" style="bottom: 13%; right: 15px;">--}}
                                    {{--<span class="h2"><span--}}
                                                {{--class="text-thin">Only</span><br><strong>$127.99</strong></span><br>--}}
                                    {{--<a href="#"--}}
                                       {{--class="btn btn-primary btn-with-icon-right waves-effect waves-light space-top-none">--}}
                                        {{--View Offer--}}
                                        {{--<i class="material-icons arrow_forward"></i>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="owl-item" style="width: 1905px; margin-right: 0px;">--}}
                        {{--<div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">--}}
                            {{--<div class="container text-center padding-top-3x">--}}
                                {{--<span class="h1 from-bottom">Stylish Chair</span><br>--}}
                                {{--<span class="h2 from-bottom"><span--}}
                                            {{--class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>--}}
                                {{--<a href="#"--}}
                                   {{--class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">--}}
                                    {{--View Offer--}}
                                    {{--<i class="material-icons arrow_forward"></i>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="owl-item active" style="width: 1905px; margin-right: 0px;">--}}
                        {{--<div class="slide" style="background-image: url(/images/store/hero-slider/03.jpg);">--}}
                            {{--<div class="container padding-top-3x">--}}
                                {{--<span class="h1 space-top from-left">Dior Sunglasses</span><br>--}}
                                {{--<span class="h2 from-right"><span class="text-thin">Only <span--}}
                                                {{--class="hidden-xs">today</span></span> <strong>-30%</strong></span><br>--}}
                                {{--<a href="#"--}}
                                   {{--class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">--}}
                                    {{--View Offer--}}
                                    {{--<i class="material-icons arrow_forward"></i>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">--}}
                        {{--<div class="slide" style="background-image: url(/images/store/hero-slider/01.jpg);">--}}
                            {{--<div class="container">--}}
                                {{--<div class="absolute from-top" style="top: 13%;">--}}
                                    {{--<span class="h1 hidden-xs">New SPA<br>Cosmetics</span>--}}
                                {{--</div>--}}
                                {{--<div class="absolute text-right from-bottom" style="bottom: 13%; right: 15px;">--}}
                                    {{--<span class="h2"><span--}}
                                                {{--class="text-thin">Only</span><br><strong>$127.99</strong></span><br>--}}
                                    {{--<a href="#"--}}
                                       {{--class="btn btn-primary btn-with-icon-right waves-effect waves-light space-top-none">--}}
                                        {{--View Offer--}}
                                        {{--<i class="material-icons arrow_forward"></i>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="owl-item cloned" style="width: 1905px; margin-right: 0px;">--}}
                        {{--<div class="slide" style="background-image: url(/images/store/hero-slider/02.jpg);">--}}
                            {{--<div class="container text-center padding-top-3x">--}}
                                {{--<span class="h1 from-bottom">Stylish Chair</span><br>--}}
                                {{--<span class="h2 from-bottom"><span--}}
                                            {{--class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>--}}
                                {{--<a href="#"--}}
                                   {{--class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">--}}
                                    {{--View Offer--}}
                                    {{--<i class="material-icons arrow_forward"></i>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            {{--<div class="owl-controls">--}}
                {{--<div class="owl-nav">--}}
                    {{--<div class="owl-prev" style=""></div>--}}
                    {{--<div class="owl-next" style=""></div>--}}
                {{--</div>--}}
                {{--<div class="owl-dots" style="">--}}
                    {{--<div class="owl-dot"><span></span></div>--}}
                    {{--<div class="owl-dot"><span></span></div>--}}
                    {{--<div class="owl-dot active"><span></span></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div><!-- .inner -->
    </section><!-- .hero-slider -->

    <!-- Content Wide -->
    <section class="container-fluid padding-top-3x">

        {{--<!-- Featured Categories -->--}}
        {{--<h3 class="text-center padding-top">Categories</h3>--}}
        {{--<div class="row padding-top padding-bottom-3x">--}}
            {{--<div class="col-sm-3 col-xs-6">--}}
                {{--<a href="#" class="category-link">--}}
                    {{--<img src="/images/store/cat01.jpg" alt="Category">--}}
                    {{--Clocks--}}
                {{--</a><!-- .category-link -->--}}
            {{--</div><!-- .col-sm-4 -->--}}
            {{--<div class="col-sm-3 col-xs-6">--}}
                {{--<a href="#" class="category-link">--}}
                    {{--<img src="/images/store/cat02.jpg" alt="Category">--}}
                    {{--Furniture--}}
                {{--</a><!-- .category-link -->--}}
            {{--</div><!-- .col-sm-4 -->--}}
            {{--<div class="col-sm-3 col-xs-6">--}}
                {{--<a href="#" class="category-link">--}}
                    {{--<img src="/images/store/cat03.jpg" alt="Category">--}}
                    {{--Lightning--}}
                {{--</a><!-- .category-link -->--}}
            {{--</div><!-- .col-sm-4 -->--}}
            {{--<div class="col-sm-3 col-xs-6">--}}
                {{--<a href="#" class="category-link">--}}
                    {{--<img src="/images/store/cat04.jpg" alt="Category">--}}
                    {{--Bags--}}
                {{--</a><!-- .category-link -->--}}
            {{--</div><!-- .col-sm-4 -->--}}
        {{--</div><!-- .row -->--}}

        <div class="row padding-top">

            {{--<!-- Special Offer -->--}}
            {{--<div class="col-lg-3 col-md-4">--}}
                {{--<div class="info-box text-center">--}}
                    {{--<h2>Special Offer<br><span class="text-danger">-30%</span></h2>--}}
                    {{--<a href="shop-single.html" class="inline">--}}
                        {{--<img src="/images/store/special-offer.jpg" alt="Special Offer">--}}
                    {{--</a>--}}
                    {{--<h3 class="lead text-normal space-bottom-half"><a href="shop-single.html" class="link-title">FLOS--}}
                            {{--Outdoor Lightning</a></h3>--}}
                    {{--<span class="lead text-normal text-gray text-crossed">$800.00</span>--}}
                    {{--<span class="h4 text-normal text-danger">$560.00</span>--}}

                    {{--<!-- Countdown -->--}}
                    {{--<!-- Date Format: month/day/year. "date-time" data attribute is required. -->--}}
                    {{--<div class="countdown space-top-half padding-top" data-date-time="07/30/2017 12:00:00">--}}
                        {{--<div class="item">--}}
                            {{--<div class="days">299</div>--}}
                            {{--<span class="days_ref">Days</span>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="hours">20</div>--}}
                            {{--<span class="hours_ref">Hours</span>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="minutes">47</div>--}}
                            {{--<span class="minutes_ref">Mins</span>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="seconds">44</div>--}}
                            {{--<span class="seconds_ref">Secs</span>--}}
                        {{--</div>--}}
                    {{--</div><!-- .counter -->--}}
                {{--</div><!-- .info-box -->--}}
                {{--<div class="padding-bottom-2x visible-xs"></div>--}}
            {{--</div><!-- .col-lg-3.col-md-4 -->--}}

            <!-- Products -->
            <div class="col-lg-9 col-md-8">
                <!-- Nav Tabs -->
                <ul class="nav-tabs text-center" role="tablist">
                    <li class="active"><a href="#newcomers" role="tab" data-toggle="tab">New Arrivals</a></li>
                    <li><a href="#toprated" role="tab" data-toggle="tab">Top Rated</a></li>
                    <li><a href="#onsale" role="tab" data-toggle="tab">On Sale</a></li>
                </ul><!-- .nav-tabs -->

                <!-- Tab Panes -->
                <div class="tab-content">

                    <!-- #newcomers -->
                    <div role="tabpanel" class="tab-pane transition fade scale in active" id="newcomers">
                        <div class="row space-top-half">
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<span class="shop-label text-danger">Sale</span>--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th01.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="{{{ url('/store/cart/add/1/1 }}}" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">Storage Box</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                                        {{--<span class="old-price">$49.00</span>--}}
                                        {{--$38.00--}}
                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                            @foreach(\App\Product::all() as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumbnail">
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="{{{ $product->pictureUrl() }}}" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="JavaScript:addToChart({{{ $product->id }}})" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">{{{ $product->name }}}</a></h3>
                                        <span class="shop-item-price">
                                            ${{{ $product->price }}}
                                          </span>
                                    </div>
                                </div><!-- .shop-item -->
                            </div><!-- .col-lg-3.col-sm-6 -->
                            @endforeach
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th03.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">Glass Vase</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                        {{--$62.50--}}
                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th04.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">Alarm Clock</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                        {{--$178.00--}}
                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                        </div><!-- .row -->
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th05.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">Wall Clock</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                        {{--$69.00--}}
                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th06.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">LED Lighting</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                        {{--$130.00--}}
                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<span class="shop-label text-warning">Popular</span>--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th07.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">Sunglasses</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                        {{--$99.00--}}
                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                            {{--<div class="col-lg-3 col-sm-6">--}}
                                {{--<div class="shop-item">--}}
                                    {{--<div class="shop-thumbnail">--}}
                                        {{--<a href="shop-single.html" class="item-link"></a>--}}
                                        {{--<img src="/images/store/th08.jpg" alt="Shop item">--}}
                                        {{--<div class="shop-item-tools">--}}
                                            {{--<a href="#" class="add-to-whishlist" data-toggle="tooltip"--}}
                                               {{--data-placement="top" title="" data-original-title="Wishlist">--}}
                                                {{--<i class="material-icons favorite_border"></i>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="add-to-cart">--}}
                                                {{--<em>Add to Cart</em>--}}
                                                {{--<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">--}}
                                                    {{--<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"--}}
                                                          {{--fill="none" stroke="#FFFFFF" stroke-width="2"--}}
                                                          {{--stroke-linecap="square" stroke-miterlimit="10"--}}
                                                          {{--d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>--}}
                                                {{--</svg>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="shop-item-details">--}}
                                        {{--<h3 class="shop-item-title"><a href="shop-single.html">Hook Basket</a></h3>--}}
                                        {{--<span class="shop-item-price">--}}
                        {{--$112.35--}}
                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div><!-- .shop-item -->--}}
                            {{--</div><!-- .col-lg-3.col-sm-6 -->--}}
                        {{--</div><!-- .row -->--}}
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th09.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Leather Case</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th10.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Concrete Lamp</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th11.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Stylish Chair</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th12.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Desktop Light</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th13.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Storage Jar</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th14.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Ceramic Watch</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th15.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Tissue Holder</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th16.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Pendant Lamp</a></h3>
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
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th05.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">Wall Clock</a></h3>
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
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th06.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">LED Lighting</a></h3>
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
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th04.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">Alarm Clock</a></h3>
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
                                        <a href="#" class="item-link"></a>
                                        <img src="/images/store/th08.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="#">Hook Basket</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th01.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Storage Box</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th07.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Sunglasses</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th09.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Leather Case</a></h3>
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
                                        <a href="shop-single.html" class="item-link"></a>
                                        <img src="/images/store/th02.jpg" alt="Shop item">
                                        <div class="shop-item-tools">
                                            <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Wishlist">
                                                <i class="material-icons favorite_border"></i>
                                            </a>
                                            <a href="#" class="add-to-cart">
                                                <em>Add to Cart</em>
                                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                          fill="none" stroke="#FFFFFF" stroke-width="2"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-item-details">
                                        <h3 class="shop-item-title"><a href="shop-single.html">Shoulder Bag</a></h3>
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

@endsection