@extends('store.basic')

@section('content')

    <!-- Content Wide -->
    <section class="container-fluid padding-top-3x">

        <div class="row padding-top">

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
                        @include('store.productRow', [
                            'products' => \App\Product::newArrivals(),
                            'rated' => false,
                            'onSale' => false
                        ])
                    </div><!-- .tab-pane#newcomers -->

                    <!-- #toprated -->
                    <div role="tabpanel" class="tab-pane transition fade scale" id="toprated">
                        @include('store.productRow', [
                            'products' => \App\Product::sortedByRate(),
                            'rated' => true,
                            'onSale' => false
                        ])
                    </div><!-- .tab-pane#toprated -->

                    <!-- #onsale -->
                    <div role="tabpanel" class="tab-pane transition fade scale" id="onsale">
                        @include('store.productRow', [
                            'products' => \App\Product::onSale(),
                            'rated' => false,
                            'onSale' => true
                        ])
                    </div><!-- .tab-pane#onsale -->
                </div><!-- .tab-content -->
            </div><!-- .col-lg-9.col-md-8 -->
        </div><!-- .row -->
    </section><!-- .container-fluid -->

    <!-- Brands -->
    <section class="container padding-top-2x padding-bottom">
        <hr>
        <h3 class="text-center padding-top-2x">Brands and Vendors</h3>
        <div class="row padding-top">
        @foreach(\App\Vendor::all() as $brand)
            <!-- Brand -->
                <div class="col-sm-4 col-xs-6">
                    <a href="#" class="brand">
                        <div class="brand-logo opacity-75">
                            <img src="{{{ $brand->pictureUrl() }}}" alt="{{{ $brand->name }}}">
                        </div>
                        <p class="brand-text">{{{ $brand->name }}}, {{{ $brand->description }}}</p>
                    </a>
                </div>
            @endforeach
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Video Popup -->
    @include('store.videopopup')

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

@endsection