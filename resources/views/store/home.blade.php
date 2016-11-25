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
        <div class="inner">
          <div class="slide" style="background-image: url(/images/featured/blog.jpg);">
          <br>
          <br>                    
          <br>
            <div class="container text-center padding-top-3x">
              <span class="h1 from-bottom" style="color: #fff; font-weight: 600; font-size: 4em;">Buy weed online.</span><br>
              <span class="h2 from-bottom" style="color: #fff; font-weight: 600; font-size: 2em;><span class="text-thin">Get it delivered anywhere in Canada.<br>
              <a href="{{url('/faq')}}" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
               How it works
                <i class="material-icons arrow_forward"></i>
              </a>
               <a href="/catalog" class="btn btn-success btn-with-icon-right waves-effect waves-light scale-up">
              View Products
                <i class="material-icons arrow_forward"></i>
              </a>
            </div>
          </div><!-- .slide -->
          <div class="slide" style="background-image: url(https://images.unsplash.com/photo-1446470031315-c47a015f36f2?dpr=1&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=);">
            <div class="container padding-top-3x">
              <span class="h1 space-top from-left">Fall specials.</span><br>
              <span class="h2 from-right"><span class="text-thin">Discounts <span class="hidden-xs">on our best varieties.</span></span> <strong></strong></span><br>
              <a href="#" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                All Deals
                <i class="material-icons arrow_forward"></i>
              </a> <a href="#" class="btn btn-success btn-with-icon-right waves-effect waves-light scale-up">
              Today's Deal
                <i class="material-icons arrow_forward"></i>
              </a>
            </div>
          </div><!-- .slide -->
        </div><!-- .inner -->
      </section><!-- .hero-slider -->

      <section class="container-fluid padding-top-3x">
<h3 class=" padding-top">Buy Weed Online. Get it delivered anywhere in Canada.</h3>
<p>That's right, you can order marijuana online (www.buyonlineweed.ca/how-to-buy-weed-online) and have it delivered to your door within 3 to 4 days anywhere in Canada.</p>
  <p>Buy Online Weed offers British Columbia's best BC Bud strains at unbeatable prices and we guarantee to have your order delivered to you as fast as possible using the very discrete guaranteed XpressPost service from Canada Post.</p>

  <!-- Features -->
      <section class="container space-top space-bottom padding-top-3x padding-bottom-3x">
        <div class="row">
          <!-- Feature -->
          <div class="col-md-3 col-sm-6">
            <div class="feature text-center">
              <div class="feature-icon">
                <i class="material-icons location_on"></i>
              </div>
              <h4 class="feature-title">Free Canada Wide Shipping</h4>
              <p class="feature-text">Canada Post Express 2-3 days</p>
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

      </section>

<h3>Who Can Buy Marijuana at Buy Online Weed?</h3>

<p>Who Can Buy Marijuana at Buy Online Weed?
At Buy Online Weed we believe all adults of sound mind should have access to the medical AND recreational benefits of marijuana.  We never sell weed to minors and we never ship marijuana outside of Canada. 

You must be 21 or older and have a Canadian ship to address in order to purchase marijuana at Buy Online Weed. When you register for an account (www.buyonlineweed.ca/how-to-buy-weed-online) we ask that you send in a snapshot of any government ID that shows your name and age.

We do not require you to claim any medical condition or to show us any medicinal marijuana programme ID.  We do not make any medical claims about marijuana and we strongly suggest you consult a medical professional before using any of our products for medical reasons.

It's easy, free and fast to register 
REGISTER NOW! (www.buyonlineweed.ca/how-to-buy-weed-online) 
<p>
</h4>
</section>

      <!-- Content Wide -->
      <section class="container-fluid padding-top-3x" id="products">

        <div class="row padding-top">

          <!-- Products -->
          @include('store.parts.products')

        </div><!-- .row -->
      </section><!-- .container-fluid -->

      <!-- Brands -->
    <!-- .container -->

      <!-- Video Popup -->
     

      <!-- .container -->

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
