<div class="row">
    @foreach($products as $product)
        <div class="col-lg-3 col-sm-6">
            <div class="shop-item">
                <div class="shop-thumbnail">
                    @if($rated)
                        @include('store.stars', $product->stars())
                    @endif
                    @if($onSale)
                        <span class="shop-label text-danger">Sale</span>
                    @endif
                    <a href="/store/{{ $product->id }}" class="item-link"></a>
                    <img src="{{{ $product->picture }}}" alt="Shop item">
                    <div class="shop-item-tools">
                        <a href="#" class="add-to-whishlist" data-toggle="tooltip"
                           data-placement="top" title="" data-original-title="Wishlist">
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
                    <h3 class="shop-item-title"><a href="shop-single.html">{{{ $product->name }}}</a></h3>
                    <span class="shop-item-price">${{{ $product->price }}}</span>
                </div>
            </div><!-- .shop-item -->
        </div><!-- .col-lg-3.col-sm-6 -->
    @endforeach
</div><!-- .row -->