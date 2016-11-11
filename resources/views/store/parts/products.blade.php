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