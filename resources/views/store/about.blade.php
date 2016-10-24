@extends('store.basic')

@section('content')

    <!-- Featured Image -->
    <div class="featured-image" style="background-image: url(images/featured/faq.jpg);"></div>

    <!-- Content -->
    <section class="container padding-top-3x padding-bottom-3x">
        <h1>About</h1>
        <div class="row padding-top">
            <div class="col-md-5 col-sm-6 padding-bottom">
                <h3>The Brand</h3>
                <p class=" space-top">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div><!-- .col-md-5.col-sm-6 -->
            <div class="col-sm-6 col-md-offset-1 padding-bottom">
                <h3>Mission</h3>
                <div class="quotation padding-top">
                    <div class="quotation-author">
                        <div class="quotation-author-ava">
                            <img src="/images/about/quote_author.jpg" alt="James Cameron">
                        </div>
                    </div>
                    <blockquote>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        <cite>C.J. Cameron, Founder M-store Ltd.</cite>
                    </blockquote>
                </div><!-- .quotation -->
            </div><!-- .col-md-6.col-sm-6.col-md-offset-1 -->
        </div><!-- .row -->
        <hr class="padding-bottom">
        <h3>Our Team</h3>
        <div class="row padding-top">
            <!-- Teammate -->
            <div class="col-xs-6 col-md-3">
                <div class="teammate">
                    <div class="teammate-thumb">
                        <div class="social-bar text-center space-bottom">
                            <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="socicon-skype"></i>
                            </a>
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="socicon-facebook"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                                <i class="socicon-googleplus"></i>
                            </a>
                        </div><!-- .social-bar -->
                        <img src="/images/about/01.jpg" alt="Teammate">
                    </div>
                    <h4 class="teammate-name">Jonathan Doe</h4>
                    <span class="teammate-position">Co-Founder, CEO</span>
                </div><!-- .teammate -->
            </div><!-- .col-xs-6.col-md-3 -->
            <!-- Teammate -->
            <div class="col-xs-6 col-md-3">
                <div class="teammate">
                    <div class="teammate-thumb">
                        <div class="social-bar text-center space-bottom">
                            <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="socicon-twitter"></i>
                            </a>
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="socicon-facebook"></i>
                            </a>
                            <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                                <i class="socicon-instagram"></i>
                            </a>
                        </div><!-- .social-bar -->
                        <img src="/images/about/02.jpg" alt="Teammate">
                    </div>
                    <h4 class="teammate-name">Branda Murray</h4>
                    <span class="teammate-position">Marketing Director</span>
                </div><!-- .teammate -->
            </div><!-- .col-xs-6.col-md-3 -->
            <!-- Teammate -->
            <div class="col-xs-6 col-md-3">
                <div class="teammate">
                    <div class="teammate-thumb">
                        <div class="social-bar text-center space-bottom">
                            <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="socicon-twitter"></i>
                            </a>
                            <a href="#" class="sb-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn">
                                <i class="socicon-linkedin"></i>
                            </a>
                            <a href="#" class="sb-dribbble" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                <i class="socicon-dribbble"></i>
                            </a>
                        </div><!-- .social-bar -->
                        <img src="/images/about/03.jpg" alt="Teammate">
                    </div>
                    <h4 class="teammate-name">Taylor White</h4>
                    <span class="teammate-position">Brand Director</span>
                </div><!-- .teammate -->
            </div><!-- .col-xs-6.col-md-3 -->
            <!-- Teammate -->
            <div class="col-xs-6 col-md-3">
                <div class="teammate">
                    <div class="teammate-thumb">
                        <div class="social-bar text-center space-bottom">
                            <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="socicon-skype"></i>
                            </a>
                            <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="socicon-facebook"></i>
                            </a>
                            <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                                <i class="socicon-googleplus"></i>
                            </a>
                        </div><!-- .social-bar -->
                        <img src="/images/about/04.jpg" alt="Teammate">
                    </div>
                    <h4 class="teammate-name">Suasanna Davis</h4>
                    <span class="teammate-position">Sales Director</span>
                </div><!-- .teammate -->
            </div><!-- .col-xs-6.col-md-3 -->
        </div><!-- .row -->
    </section><!-- .container -->

    <!-- Video Popup -->
    @include('store.videopopup')

@endsection