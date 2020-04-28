@extends('layouts.sitelay')
@section('content')


<div class="all-page-title" style="background-image:url(images/pattern-4.png);">
    <div class="container text-center">
        <h1>Our Products</h1>
    </div>
    <!--Page -->
    <div class="page-info">
        <div class="container">
            <div class="inner-container">
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Products</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Page-->
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

<div id="products" class="">
    <div class="container">


        <div class=" section-title text-center">
            <h3>Oil drilling </h3>
            <p>API supplies the best drilling tools and equipment. We provide stabilizer, mud motors, drilling jars, drill collars, NMDC, fishing tools, and BOPs. We are committed to provide our clients best quality, fast delivery, and reasonable prices.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="products-ul">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li>PDC drilling bits</li>
                                <li>Drilling Collar</li>
                                <li>Heavy Weight Drilling pipes</li>
                                <li>Rotary Reamer</li>
                                <li>Jar Intensifier</li>
                                <li>Variable Gauge Stabilizer</li>
                                <li>Fishing Jars</li>
                                <li>Slips</li>
                                <li>Manual Tongs</li>
                                <li>Subs & joints</li>
                                <li>Air Winch</li>
                                <li>Manifolds</li>
                                <li>Motor tester</li>
                                <li>Drilling line</li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li>Mud pump & parts</li>
                                <li>Mud Motor</li>
                                <li>Integral Blade Stabilizer</li>
                                <li>Hole Opener</li>
                                <li>Drilling jar</li>
                                <li>Shock Absorber</li>
                                <li>Non-mag Drilling Tools</li>
                                <li>Fishing Tools</li>
                                <li>Spider</li>
                                <li>Elevator</li>
                                <li>BOP & Parts</li>
                                <li>Bucking units</li>
                                <li>Drillers glove</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="uploads/about_01.jpg" alt="" class="img-responsive img-rounded">
                </div><!-- end media -->

            </div><!-- end col -->
        </div>
    </div>
</div>
@foreach($product as $row)

<div id="products-info1" class="py-8 my-8">
    <div class="container">
        <div class=" section-title text-center">
            <h3>{{$row->title}}</h3>
            <p> {!! $row->des !!}</p>
        </div>

{{--        <div class="row">--}}
{{--            <div class="col-md-6 col-sm-6 col-xs-12 py-2">--}}
{{--                <div class="post-media wow fadeIn">--}}
{{--                    <img src="uploads/about_01.jpg" alt="" class="img-responsive img-rounded">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-6 col-sm-6 col-xs-12 py-2">--}}
{{--                <div class="post-media wow fadeIn">--}}
{{--                    <img src="uploads/about_01.jpg" alt="" class="img-responsive img-rounded">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}



    </div>
</div>
    @endforeach
    @stop