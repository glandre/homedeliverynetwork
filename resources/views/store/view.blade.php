@extends('store.basic')

@section('content')
	<section class="fw-section bg-gray padding-top-3x">

        <!-- Page Navigation -->
        <a href="#" class="page-nav page-prev">
          	<span class="page-preview">
            	<img src="img/pager/01.jpg" alt="Page">
          	</span>
          	&mdash; Prev
        </a>
        <a href="#" class="page-nav page-next">
          	<span class="page-preview">
            	<img src="img/pager/02.jpg" alt="Page">
          	</span>
          	Next &mdash;
        </a>
        <div class="container padding-top">

          	<!-- Product Gallery -->
          	<div class="product-gallery">
            	<!-- Preview -->
            	<ul class="product-gallery-preview">
					<li id="preview01"><img src="{{ $product->picture }}" alt="Product"></li>
					<li id="preview02" class="current"><img src="{{ $product->picture }}" alt="Product"></li>
					<li id="preview03"><img src="{{ $product->picture }}" alt="Product"></li>
            	</ul><!-- .product-gallery-preview -->
            	<!-- Thumblist -->
            	<!-- <ul class="product-gallery-thumblist">
              		<li><a href="#preview01">
                		<img src="https://ucarecdn.com/8cf3ac13-7f9e-4af4-89d9-4117ba6ad042/" alt="Product">
              		</a></li>
              		<li class="active"><a href="#preview02">
                		<img src="https://ucarecdn.com/3c532335-3451-4c41-997d-a0cd0e6847e6/" alt="Product">
              		</a></li>
              		<li><a href="#preview03">
                		<img src="{{ $product->picture }}" alt="Product">
              		</a></li>
            	</ul> --><!-- .product-gallery-thumblist -->
          	</div><!-- .product-gallery -->
        </div><!-- .container -->
	</section><!-- .fw-section.bg-gray -->

	<!-- Product Info -->
	<section class="fw-section bg-gray padding-bottom-3x">
        <div class="container">
			<div class="product-info padding-top-2x text-center">
            	<h1 class="h2 space-bottom-half">{{ $product->name }}</h1>
            	<h2>{{ $product->price }}</h2>
            	<p class="text-sm text-gray">{{ $product->description }}</p>
            	<div class="product-meta">
              		<div class="product-sku">
                		<strong>SKU: </strong>
                		<span>146950023</span>
              		</div>
              		<div class="product-category">
                		<strong>Product Type: </strong>
                		<a href="#">{{ $product->type_id }}</a>
              		</div>
              		<span class="product-rating text-warning">
		                <i class="material-icons star"></i>
		                <i class="material-icons star"></i>
		                <i class="material-icons star"></i>
		                <i class="material-icons star"></i>
		                <i class="material-icons star_border"></i>
					</span>
            	</div><!-- .product-meta -->
            	<div class="product-tools shop-item">
              		<div class="count-input">
                		<a class="incr-btn" data-action="decrease" href="#">–</a>
                		<input class="quantity" type="text" value="1">
                		<a class="incr-btn" data-action="increase" href="#">+</a>
              		</div><!-- .count-input -->
              		<div class="form-element">
                		<select class="form-control form-control-sm color-select">
							<option value="blue" data-image="preview02">Blue</option>
							<option value="creme" data-image="preview01">Creme</option>
							<option value="red" data-image="preview03">Red</option>
						</select>
              		</div><!-- .form-element -->
              		<a href="JavaScript:addToCart({{{ $product->id }}})" class="add-to-cart">
                		<em>Add to Cart</em>
                		<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
						</svg>
              		</a><!-- .add-to-cart -->
            	</div><!-- .product-tools -->
            	<div class="product-share">
              		<span>Share this product: </span>
              		<div class="social-bar">
                		<a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                  			<i class="socicon-facebook"></i>
                		</a>
                		<a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                  			<i class="socicon-twitter"></i>
                		</a>
                		<a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                  			<i class="socicon-instagram"></i>
                		</a>
              		</div>
            	</div><!-- .product-share -->
          	</div><!-- .product-info -->
        </div><!-- .container -->
	</section><!-- .fw-section.bg-gray -->

	<!-- Related Products -->
	<section class="container padding-top padding-bottom-3x">
        <hr>
        <h3 class="padding-top">You May Also Like</h3>
        <div class="row padding-top">
			<div class="col-lg-3 col-sm-6">
            	<div class="shop-item">
              		<div class="shop-thumbnail">
                		<span class="shop-label text-danger">Sale</span>
                		<a href="#" class="item-link"></a>
                		<img src="img/shop/th05.jpg" alt="Shop item">
                		<div class="shop-item-tools">
                  			<a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                    			<i class="material-icons favorite_border"></i>
                  			</a>
                  			<a href="#" class="add-to-cart">
                    			<em>Add to Cart</em>
                    			<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                      				<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                    			</svg>
                  			</a>
                		</div>
              		</div>
              		<div class="shop-item-details">
                		<h3 class="shop-item-title"><a href="#">Wall Clock</a></h3>
            			<span class="shop-item-price">
                  			<span class="old-price">$69.00</span>$48.00</span>
          			</div>
            	</div><!-- .shop-item -->
          	</div><!-- .col-lg-3.col-sm-6 -->
      		<div class="col-lg-3 col-sm-6">
        		<div class="shop-item">
          			<div class="shop-thumbnail">
            			<a href="#" class="item-link"></a>
            			<img src="img/shop/th06.jpg" alt="Shop item">
            			<div class="shop-item-tools">
              				<a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                				<i class="material-icons favorite_border"></i>
              				</a>
              				<a href="#" class="add-to-cart">
                				<em>Add to Cart</em>
                				<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                  					<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                				</svg>
              				</a>
            			</div>
          			</div>
          			<div class="shop-item-details">
            			<h3 class="shop-item-title"><a href="#">LED Lighting</a></h3>
            			<span class="shop-item-price">$130.00</span>
          			</div>
        		</div><!-- .shop-item -->
      		</div><!-- .col-lg-3.col-sm-6 -->
      		<div class="col-lg-3 col-sm-6">
        		<div class="shop-item">
          			<div class="shop-thumbnail">
            			<a href="#" class="item-link"></a>
            			<img src="img/shop/th04.jpg" alt="Shop item">
            			<div class="shop-item-tools">
              				<a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                				<i class="material-icons favorite_border"></i>
              				</a>
              				<a href="#" class="add-to-cart">
                				<em>Add to Cart</em>
                				<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                  					<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                				</svg>
              				</a>
            			</div>
          			</div>	
          			<div class="shop-item-details">
            			<h3 class="shop-item-title"><a href="#">Alarm Clock</a></h3>
            			<span class="shop-item-price">$178.00</span>
          			</div>
        		</div><!-- .shop-item -->
      		</div><!-- .col-lg-3.col-sm-6 -->
      		<div class="col-lg-3 col-sm-6">
        		<div class="shop-item">
          			<div class="shop-thumbnail">
            			<a href="#" class="item-link"></a>
            			<img src="img/shop/th08.jpg" alt="Shop item">
            			<div class="shop-item-tools">
              				<a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                				<i class="material-icons favorite_border"></i>
              				</a>
              				<a href="#" class="add-to-cart">
                				<em>Add to Cart</em>
                				<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                  					<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                				</svg>
              				</a>
            			</div>
          			</div>
          			<div class="shop-item-details">
            			<h3 class="shop-item-title"><a href="#">Hook Basket</a></h3>
            			<span class="shop-item-price">$112.35</span>
          			</div>
        		</div><!-- .shop-item -->
      		</div><!-- .col-lg-3.col-sm-6 -->
    	</div><!-- .row -->
  	</section><!-- .container -->
@endsection
