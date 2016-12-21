@extends('store.basic')

@section('content')

    <!-- Hero Slider -->
    <!-- Data API:
        data-loop="true/false" enable/disable looping
        data-autoplay="true/false" enable/disable carousel autoplay
        data-interval="3000" autoplay interval timeout in miliseconds
        Simply add necessary data attribute to the ".hero-carousel" with appropriate value to adjust carousel functionality. -->
    <section class="hero-slider" data-loop="true" data-autoplay="true" data-interval="7000" style="background-color: rgba(36, 36, 36, 0.7)">
        <div class="inner" >
          	<div class="slide" style="background-image: url(/images/featured/about.jpg);">
          		<br>
          		<br>                    
          		<br>
            	<div class="container text-center ">
              		<span class="h1 from-bottom" style="color: #fff; font-weight: 600; font-size: 4em;">Buy weed online.</span><br>
              		<span class="h2 from-bottom" style="color: #fff; font-weight: 600; font-size: 2em;"><span class="text-thin">Get it delivered anywhere in Canada.<br>
              		<a href="{{url('/faq')}}" class="btn btn-primary btn-square btn-with-icon-right waves-effect waves-light scale-up">
               			How it works
                		<i class="material-icons arrow_forward"></i>
              		</a>
               		<a href="/catalog" class="btn btn-success btn-square btn-with-icon-right waves-effect waves-light scale-up">
              			View Products
                		<i class="material-icons arrow_forward"></i>
              		</a>
            	</div>
          	</div><!-- .slide -->
          	<div class="slide" style="background-image: url(/images/featured/blog.jpg);">
            	<div class="container padding-top-3x">
              		<span class="h1 space-top from-left" style="color: #fff; font-weight: 600; font-size: 4em;" >Fall specials.</span><br>
              		<span class="h2 from-right" style="color: #fff;"><span class="text-thin">Discounts <span class="hidden-xs">on our best varieties.</span></span> <strong></strong></span><br>
              		<a href="#" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                		All Deals
                		<i class="material-icons arrow_forward"></i>
              		</a>
              		<a href="#" class="btn btn-success btn-with-icon-right waves-effect waves-light scale-up">
              			Today's Deal
                		<i class="material-icons arrow_forward"></i>
              		</a>
            	</div>
          	</div><!-- .slide -->
        </div><!-- .inner -->
    </section><!-- .hero-slider -->
   

	<section class="container-fluid padding-top-3x">
		<h2 class=" padding-top text-center">Buy Weed Online.</h2>
    <h3 class=" text-center">Get it delivered anywhere in Canada.</h3>
  		<!-- Features -->
      	<section class="container space-top space-bottom padding-top-3x padding-bottom-3x">
        	<div class="row">
          		<!-- Feature -->
          		<div class="col-md-4 col-sm-6">
            		<div class="feature text-center">
              			<div class="feature-icon">
                			<i class="material-icons location_on"></i>
              			</div>
              			<h4 class="feature-title">Canada Wide Shipping</h4>
              			<p class="feature-text">Canada Post Express 2-3 days</p>
            		</div>
          		</div>
          		<!-- Feature -->
          		<div class="col-md-4 col-sm-6">
            		<div class="feature text-center">
              			<div class="feature-icon">
                			<i class="material-icons autorenew"></i>
              			</div>
              			<h4 class="feature-title">Quality Bud</h4>
              			<p class="feature-text">The best Bud from award winning growers.</p>
            		</div>
          		</div>
          		<!-- Feature -->
          		<div class="col-md-4 col-sm-6">
            		<div class="feature text-center">
              			<div class="feature-icon">
                			<i class="material-icons headset_mic"></i>
              			</div>
              			<h4 class="feature-title">Excellent Customer Service</h4>
              			<p class="feature-text">Friendly 24/7 customer support</p>
            		</div>
          		</div>
          		<!-- Feature -->
        	</div><!-- .row -->
          <div class="row padding-top-2x" >
              <div class="col-md-4">
                <img src="/images/delivery/delivery1.jpg">
              </div>
                <div class="col-md-8">
                <p><strong>That's right,</strong> you can order marijuana online and have it delivered to your door within 3 to 4 days anywhere in Canada.</p>
                <p>Buy Online Weed offers British Columbia's best BC Bud strains at unbeatable prices and we guarantee to have your order delivered to you as fast as possible using the very discrete guaranteed XpressPost service from Canada Post.</p>
                </div>  
          </div>

      	</section>
	</section>
   	<section class="padding-top-3x padding-bottom-3x " style="background-color: #2c3e50; color: #fff;" >
        <div class="container-fluid">
            <div class="row">
            	<div class="col-md-6 col-md-offset-3">
            		<h3 style="color: #fff;"> <strong>Get your weed delivered.</strong></h3>
            		<h3 style="color: #fff;"><strong>Apply for a customer account today.</strong></h3>
            		<h4 style="color: #fff;">Apply in seconds. Approved in minutes.*</h4>
            		<br>
            		<p style="font-style: italic;"><small>*To buy weed online you must be 21 or older with a ship-to address within Canada.</small></p>
            		<a href="" class="btn btn-success btn-square" style="text-align: center; margin-left: auto; margin-right: auto;"> Register Now</a>
            	</div>
            	<div class="col-md-3">
            		 
            	</div>

            </div>  
        </div>
  	</section>

	<!-- Content Wide -->
	<section class="container-fluid padding-top-3x" id="products">
        <div class="row padding-top">
        	<h3>Bestsellers</h3>
			<!-- Products -->
			@include('store.parts.products')

        </div>
         <div class="row padding-top">
        	<h3>New Additions</h3>
			<!-- Products -->
			@include('store.parts.products')

        </div>
         <div class="row padding-top">
        	<h3>Hidden Gems</h3>
			<!-- Products -->
			@include('store.parts.products')

        </div>
        <!-- .row -->

	</section><!-- .container-fluid -->
  <section>
      <div class="container-fluid">
          <div class="row">
              <h3>Who Can Buy Marijuana at Buy Online Weed?</h3>
              <p>
                At Buy Online Weed we believe all adults of sound mind should have access to the medical AND recreational 
                benefits of marijuana. 

                We never sell weed to minors and we never ship marijuana outside of Canada. 
                You must be 21 or older and have a Canadian ship to address in order to purchase marijuana at Buy Online Weed.
                When you register for an account (www.buyonlineweed.ca/how-to-buy-weed-online) we ask that you send

                in a snapshot of any government ID that shows your name and age.
                We do not require you to claim any medical condition or to show us any medicinal marijuana programme ID. 
                We do not make any medical claims about marijuana and we strongly suggest you consult a medical
                professional before using any of our products for medical reasons.

                It's easy, free and fast to register 
                REGISTER NOW! (www.buyonlineweed.ca/how-to-buy-weed-online) 
              </p>
          </div>  
      </div>
  </section>

@endsection



@section('js')
  <!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <script src="/js/store/jquery-2.1.4.min.js"></script>
  <script src="/js/store/bootstrap.min.js"></script>
  <script src="/js/store/smoothscroll.js"></script>
  <script src="/js/store/velocity.min.js"></script>
  <script src="/js/store/waves.min.js"></script>
  <script src="/js/store/icheck.min.js"></script>
  <script src="/js/store/owl.carousel.min.js"></script>
  <script src="/js/store/magnific-popup.min.js"></script>
  <script src="/js/store-extensions/scripts.js"></script>
@endsection
