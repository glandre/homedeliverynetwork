@extends('store.basic')

@section('content')

    <!-- Content Wide -->
    <section class="container-fluid padding-top-3x">

        <div class="row padding-top">

            <!-- Products -->
            @include('store.parts.products')

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
                            <img src="{{{ $brand->picture }}}" alt="{{{ $brand->name }}}">
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

@section('js')
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
@endsection