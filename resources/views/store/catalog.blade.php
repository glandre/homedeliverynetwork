@extends('store.basic')

@section('content')
    <!-- Page Title -->
    <section class="container padding-top-3x">
        <h1 class="space-top-half tablet-center">Products</h1>
    </section><!-- .container-fluid -->

    <!-- Filters Bar -->
    <section class="container padding-top">
        <div class="filters-bar space-top-half">
            <div class="column">
                <!-- Nav Filters -->
                <ul class="nav-filters">
                    <li class="active"><a href="#">All</a> <sup>{{ count($products) }}</sup></li>
                    <!-- <li><a href="#">Furniture</a> <sup>42</sup></li>
                    <li><a href="#">Accessories</a> <sup>56</sup></li>
                    <li><a href="#">Lightning</a> <sup>28</sup></li>
                    <li><a href="#">Clocks</a> <sup>10</sup></li> -->
                </ul><!-- .nav-filters -->
            </div><!-- .column -->
            <div class="column">
                <!-- <a href="#filters" class="filters-toggle" data-toggle="filters"> -->
                    <!-- <i class="material-icons filter_list"></i> -->
                    <!-- Filters -->
                <!-- </a> -->
                <!-- <a href="#search-box" class="search-btn" data-toggle="filters"> -->
                    <!-- <i class="material-icons search"></i> -->
                <!-- </a> -->
            </div>
        </div><!-- .filters-bar -->
        <div class="row filters">
            <div class="col-xs-12 filters-pane" id="filters">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Sorting Widget -->
                        <div class="widget widget-sorting">
                            <h3 class="widget-title">Sort By</h3>
                            <ul>
                                <li class="active">
                                    <a href="#"><i class="material-icons sort"></i> Default</a>
                                </li>
                                <li>
                                    <a href="#"><i class="material-icons favorite_border"></i> Popularity</a>
                                </li>
                                <li>
                                    <a href="#"><i class="material-icons vertical_align_top"></i> Last entries</a>
                                </li>
                                <li>
                                    <a href="#"><i class="material-icons star_border"></i> Average rating</a>
                                </li>
                                <li>
                                    <a href="#"><i class="material-icons sort_by_alpha"></i> Alphabetically</a>
                                </li>
                            </ul>
                        </div><!-- .widget.widget-sorting -->
                    </div>
                    <div class="col-md-2">
                        <div class="widget widget-color">
                            <h3 class="widget-title">Color Filter</h3>
                            <ul>
                                <li><a href="#">
                                    <span class="color" style="background-color: #93c4ef;"></span>
                                    Blue
                                </a></li>
                                <li><a href="#">
                                    <span class="color" style="background-color: #a7c04d;"></span>
                                    Green
                                </a></li>
                                <li><a href="#">
                                    <span class="color" style="background-color: #ef0568;"></span>
                                    Red
                                </a></li>
                                <li><a href="#">
                                    <span class="color" style="background-color: #ffce2b;"></span>
                                    Yellow
                                </a></li>
                            </ul>
                        </div><!-- .widget.widget-color -->
                    </div>
                    <div class="col-md-3">
                        <!-- Price Range Widget -->
                        <!-- Please note: Only one Range Slider allowed on the page! -->
                        <div class="widget widget-catesgories">
                            <h3 class="widget-title">Price Range</h3>
                            <form method="post" class="price-range-slider" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                                <div class="ui-range-slider"></div>
                                <footer class="ui-range-slider-footer">
                                    <div class="column">
                                        <button type="submit" class="btn btn-ghost btn-sm btn-default">Filter</button>
                                    </div>
                                    <div class="column">
                                        <div class="ui-range-values">
                                            <div class="ui-range-value-min">
                                                $<span></span>
                                                <input type="hidden">
                                            </div> -
                                            <div class="ui-range-value-max">
                                                $<span></span>
                                                <input type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </form><!-- .price-range-slider -->
                        </div><!-- .widget.widget-categories -->
                    </div>
                    <div class="col-md-3 col-md-offset-1">

                    <!-- Tags Widget -->
                    <div class="widget widget-tags">
                        <h3 class="widget-title">Popular Tags</h3>
                        <a href="#">Interior</a>
                        <a href="#">Electro</a>
                        <a href="#">Bags</a>
                        <a href="#">Cuttlery</a>
                        <a href="#">Downloadable</a>
                        <a href="#">Digital goods</a>
                        <a href="#">HiFi</a>
                    </div><!-- .widget.widget-price -->
                </div>
            </div><!-- .row -->
        </div><!-- .col-xs-12.filters-pane#filters -->
        <form class="col-xs-12 filters-pane" id="search-box">
            <input type="text" class="form-control" placeholder="Type and hit enter">
        </form><!-- .col-xs-12.filters-pane#search-box -->
    </div><!-- .row.filters -->
    </section><!-- .container -->

    <!-- Shop Catalog -->
    <section class="container padding-bottom-3x">
        <div class="row">
            @foreach($products as $product)
                <!-- Item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-item" style="height: 200px;">
                        <div class="shop-thumbnail">
                            <!-- <span class="shop-label text-danger">Sale</span> -->
                            <a href="/store/{{ $product->id }}" class="item-link"></a>
                            <img src="{{ $product->picture }}" alt="Shop item">
                            <div class="shop-item-tools">
                                <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <i class="material-icons favorite_border"></i>
                                </a>
                                <a href="JavaScript:addToCart({{{ $product->id }}})" class="add-to-cart">
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
                            <h3 class="shop-item-title"><a href="shop-single.html">{{ $product->name }}</a></h3>
                            <span class="shop-item-price">
                                <span class="price">{{ $product->price }}</span>
                            </span>
                        </div>
                    </div><!-- .shop-item -->
                </div><!-- .col-md-4.col-sm-6 -->
            @endforeach
        </div>
    </section>
@endsection
