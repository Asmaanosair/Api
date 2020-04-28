@extends('layouts.sitelay')
@section('content')

<div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('{{url("/site/uploads/pppp.png")}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="big-tagline">
                    <h2>Increase Your Ranking<br> on Search Engines</h2>
                    <p class="lead">With API is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    <a href="services.html" class="btn btn-light btn-radius btn-brd ban-btn">API Analysis</a>
                </div>
            </div>

            <div class="app_iphone_02 wow slideInUp hidden-xs hidden-sm" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{url('site/uploads/rocket-1.png')}}" alt="" class="img-responsive">
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
    <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
    </path>
</svg>

<div id="about" class="section wb nopadtop">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="{{url('site/uploads/about_01.jpg')}}" alt="" class="img-responsive img-rounded">
                    <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                </div><!-- end media -->
            </div><!-- end col -->

            <div class="col-md-6 m40">
                <div class="message-box">
                    <h4>Awards Winning API Company</h4>
                    <h2>We Are API</h2>

                    <p class="lead-p">
                        {{$home->we_are_api}}
                    </p>
{{--                    <p class="lead-p">--}}
{{--                        They all together decide to establish a company with excellent reputable, Advanced Petroleum Investment Company with mean target is to deliver the services to the clients with world class of excellence and competitive cost.--}}
{{--                    </p>--}}
{{--                    <p class="lead-p">--}}
{{--                        Advanced Petroleum Company target is to keep improved and developing itself till become one of the best and largest oilfield service company in Egypt--}}
{{--                    </p>--}}
{{--                    <p class="lead-p">--}}
{{--                        The company will maintain its targets while expanding the provided services to the clients.--}}
{{--                    </p>--}}


                </div>
            </div>
        </div>

        <hr class="hr1">

        <div class="section-title text-center">
            <small>Core Values</small>
            <h3>Who We Are</h3>
            <p class="lead-p">    {{$home->how}}</p>
        </div><!-- end title -->

        <div class="seo-services row clearfix">
            @foreach($who as $row)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="who">
                    <img src="{{url('img/'.$row->img)}}" alt="icon" class="wow fadeInUp">
                    <h4>{{$row->title}}</h4>
                    <p class="lead">{{$row->des}}</p>
                </div>
            </div><!-- end col -->
@endforeach
{{--            <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                <div class="who">--}}
{{--                    <img src="{{url('site/images/seo-icons/research.svg')}}" alt="icon" class="wow fadeInUp">--}}
{{--                    <h4>Research Optimization</h4>--}}
{{--                    <p class="lead">Research Ipsum dolroin gravida nibh vel velit aliquet. Aenean lorem quis optimization..</p>--}}
{{--                </div>--}}
{{--            </div><!-- end col -->--}}

{{--            <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                <div class="who">--}}
{{--                    <img src="{{url('site/images/seo-icons/stopwatch.svg')}}" alt="icon" class="wow fadeInUp">--}}
{{--                    <h4>Save Time + Money</h4>--}}
{{--                    <p class="lead">Save Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin lorem quis money..</p>--}}
{{--                </div>--}}
{{--            </div><!-- end col -->--}}

{{--            <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                <div class="who">--}}
{{--                    <img src="{{url('site/images/seo-icons/development.svg')}}" alt="icon" class="wow fadeInUp">--}}
{{--                    <h4>Ranking Monitoring</h4>--}}
{{--                    <p class="lead">Monitoring Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin ranking..</p>--}}
{{--                </div>--}}
{{--            </div><!-- end col -->--}}
        </div><!-- end how-its-work -->
    </div><!-- end container -->
</div><!-- end section -->




<section id="v-m">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="post-media wow fadeIn">
                    <img src="{{url('site/images/Vision.png')}}" alt="" class="img-responsive img-rounded">
                </div><!-- end media -->
            </div><!-- end col -->

            <div class="col-md-8 m40" style="padding-top: 50px;">
                <div class=" message-box-up">
                    <h4>Our vision:</h4>

                    <p style="padding-left: 20px" class="lead-p">
                        {{$home->vision}}
                    </p>

                    <h4>Our mission:</h4>

                    <p style="padding-left: 20px" class="lead-p">
                        {{$home->mission}}
                    </p>


                </div>
            </div>
        </div>

    </div>
</section>




<section class="section nopad cac text-center">
    <a href="contact.html"><h3>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h3></a>
</section>

<div id="services" class="section lb">
    <div class="container">
        <div class="section-title text-center">

            <h3>API Services</h3>
        </div>

        <div class="row text-center">
            @foreach($serv as $key=>$row)
                @if($key<=2)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a href="#">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <img src="{{url('img/'.$row->img)}}" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>{{$row->title}}</h3>
                        <p>{{$row->s_des}} </p>
                    </div>
                </a>
            </div>
                @endif
@endforeach


          <!-- end col -->
        </div><!-- end row -->

        <hr class="invis">

        <div class="row text-center">
            @foreach($serv as $key=>$row)
                @if($key>2)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="#">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="{{url('img/'.$row->img)}}" alt="" class="img-responsive img-rounded">
                                </div>
                                <h3>{{$row->title}}</h3>
                                <p>{{$row->s_des}} </p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div><!-- end row -->

    </div><!-- end container -->
</div><!-- end section -->

<!--
    <div id="case" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <small>Our Awesome Clients</small>
                <h3>Case Study</h3>
                <p class="lead">We offer unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
            </div> end title

            <div class="owl-screenshots owl-carousel owl-theme text-center">
                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/version_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/version_01.jpg" alt="" class="img-responsive img-rounded">
                            <div class="magnifier"></div>
                        </div>

                        <h3>Web Design Project</h3>
                        <small>Landing Page</small>
                    </div>
                </div>

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/version_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/version_02.jpg" alt="" class="img-responsive img-rounded">
                            <div class="magnifier"></div>
                        </div>

                        <h3>App Project</h3>
                        <small>Landing Page</small>
                    </div>
                </div>

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/version_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/version_03.jpg" alt="" class="img-responsive img-rounded">
                            <div class="magnifier"></div>
                        </div>

                        <h3>Watch Project</h3>
                        <small>Landing Page</small>
                    </div>
                </div>

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/version_04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/version_04.jpg" alt="" class="img-responsive img-rounded">
                            <div class="magnifier"></div>
                        </div>

                        <h3>Hosting Project</h3>
                        <small>Landing Page</small>
                    </div>
                </div>

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/version_05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/version_05.jpg" alt="" class="img-responsive img-rounded">
                            <div class="magnifier"></div>
                        </div>

                        <h3>SEO Project</h3>
                        <small>Landing Page</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax section lb">
        <div class="container">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span>
                    <p class="stat_count">1200</p>
                    <h3>Complated Projects</h3>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span>
                    <p class="stat_count">3210</p>
                    <h3>Happy Clients</h3>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span>
                    <p class="stat_count">3781</p>
                    <h3>Customer Services</h3>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span>
                    <p class="stat_count">4300</p>
                    <h3>Answered Questions</h3>
                </div>
            </div>
        </div>
    </div>
-->
<!--

    <div id="pricing" class="section pricing-bg">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
                <p class="lead">Get the red carpet treatment just $39 per month! It is estimated that 3.5 million established by personal blogs.<br> From each other, we share paid WordPress themes WP Service...</p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Free SEO Analysis</h2>
                                            <h3>$15/month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
										<div class="pricing-table-text">
                                            <p>This is a perfect choice for small businesses and startups.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>4 Month SEO</h2>
                                            <h3>$59/One-Time</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>This is a perfect choice for small businesses and startups.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Ultimate SEO</h2>
                                            <h3>$85/one-time</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
										<div class="pricing-table-text">
                                            <p>This is a perfect choice for small businesses and startups.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->


<div id="testimonials" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Happy Clients</h3>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    @foreach($test as $row)
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i>{{$row->title}}</h3>
                            <p class="lead">{{$row->des}}.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="{{url('img/'.$row->img)}}" alt="" class="img-responsive alignleft">
                            <h4>{{$row->name}}<small>- {{$row->job}}</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    @endforeach
                    <!-- end testimonial -->


                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@stop