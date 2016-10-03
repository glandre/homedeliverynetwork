@extends('layouts.app')


@section('head-extensions')
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/css/morris.css">

    <!-- Switchery css -->
    <link href="/css/switchery.min.css" rel="stylesheet">
@endsection

@section('settings-menu')
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another
            action</a>
        <a class="dropdown-item" href="#">Something
            else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated
            link</a>
    </div>
@endsection

@section('page-title')
    Dashboard
@endsection

@section('content')

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-layers pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                    <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                    <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-paypal pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                    <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-chart pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                    <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                    <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                    <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xs-12 col-lg-12 col-xl-8">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                    <div class="text-xs-center">
                        <ul class="list-inline chart-detail-list m-b-0">
                            <li class="list-inline-item">
                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                            </li>
                            <li class="list-inline-item">
                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                            </li>
                            <li class="list-inline-item">
                                <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>Series C</h6>
                            </li>
                        </ul>
                    </div>

                    <div id="morris-bar-stacked" style="height: 320px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        {{--<svg height="320" version="1.1" width="890" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.75px;">--}}
                            {{--<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>--}}
                            {{--<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>--}}
                            {{--<text x="32.515625" y="281" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"--}}
                                  {{--fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>--}}
                            {{--</text>--}}
                            {{--<path fill="none" stroke="#eeeeee" d="M45.015625,281H865" stroke-width="0.5"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<text x="32.515625" y="217" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>--}}
                            {{--</text>--}}
                            {{--<path fill="none" stroke="#eeeeee" d="M45.015625,217H865" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<text x="32.515625" y="153" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan>--}}
                            {{--</text>--}}
                            {{--<path fill="none" stroke="#eeeeee" d="M45.015625,153H865" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<text x="32.515625" y="89" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan>--}}
                            {{--</text>--}}
                            {{--<path fill="none" stroke="#eeeeee" d="M45.015625,89H865" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<text x="32.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">400</tspan>--}}
                            {{--</text>--}}
                            {{--<path fill="none" stroke="#eeeeee" d="M45.015625,25H865" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<text x="827.7279829545455" y="293.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal" transform="matrix(1,0,0,1,0,7)">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>--}}
                            {{--</text>--}}
                            {{--<text x="678.6399147727273" y="293.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal" transform="matrix(1,0,0,1,0,7)">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>--}}
                            {{--</text>--}}
                            {{--<text x="529.551846590909" y="293.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" s--}}
                                  {{--tyle="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" f--}}
                                  {{--ont-weight="normal" transform="matrix(1,0,0,1,0,7)">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>--}}
                            {{--</text>--}}
                            {{--<text x="380.46377840909093" y="293.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal" transform="matrix(1,0,0,1,0,7)">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan>--}}
                            {{--</text>--}}
                            {{--<text x="231.37571022727272" y="293.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal" transform="matrix(1,0,0,1,0,7)">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan>--}}
                            {{--</text>--}}
                            {{--<text x="82.28764204545455" y="293.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"--}}
                                  {{--font-weight="normal" transform="matrix(1,0,0,1,0,7)">--}}
                                {{--<tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2005</tspan>--}}
                            {{--</text>--}}
                            {{--<rect x="67.37883522727273" y="252.2" width="29.81761363636364" height="28.80000000000001"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="67.37883522727273" y="137" width="29.81761363636364" height="115.19999999999999"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="67.37883522727273" y="73" width="29.81761363636364" height="64"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="141.92286931818182" y="233" width="29.81761363636364" height="48"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="141.92286931818182" y="191.4" width="29.81761363636364" height="41.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="141.92286931818182" y="140.20000000000002" width="29.81761363636364" height="51.19999999999999"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="216.46690340909092" y="217" width="29.81761363636364" height="64"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="216.46690340909092" y="159.4" width="29.81761363636364" height="57.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="216.46690340909092" y="123.56" width="29.81761363636364" height="35.84"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="291.01093749999995" y="233" width="29.81761363636364" height="48"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="291.01093749999995" y="191.4" width="29.81761363636364" height="41.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="291.01093749999995" y="134.44" width="29.81761363636364" height="56.96000000000001"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="365.5549715909091" y="217" width="29.81761363636364" height="64"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="365.5549715909091" y="159.4" width="29.81761363636364" height="57.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="365.5549715909091" y="82.6" width="29.81761363636364" height="76.80000000000001"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="440.0990056818182" y="233" width="29.81761363636364" height="48"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="440.0990056818182" y="191.4" width="29.81761363636364" height="41.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="440.0990056818182" y="121" width="29.81761363636364" height="70.4"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="514.6430397727273" y="249" width="29.81761363636364" height="32"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="514.6430397727273" y="223.4" width="29.81761363636364" height="25.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="514.6430397727273" y="169" width="29.81761363636364" height="54.400000000000006"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="589.1870738636363" y="233" width="29.81761363636364" height="48"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="589.1870738636363" y="191.4" width="29.81761363636364" height="41.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="589.1870738636363" y="158.12" width="29.81761363636364" height="33.28"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="663.7311079545455" y="249" width="29.81761363636364" height="32"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="663.7311079545455" y="223.4" width="29.81761363636364" height="25.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="663.7311079545455" y="174.12" width="29.81761363636364" height="49.28"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="738.2751420454546" y="233" width="29.81761363636364" height="48"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="738.2751420454546" y="191.4" width="29.81761363636364" height="41.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="738.2751420454546" y="133.8" width="29.81761363636364" height="57.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="812.8191761363637" y="217" width="29.81761363636364" height="64"--}}
                                  {{--rx="0" ry="0" fill="#3db9dc" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="812.8191761363637" y="159.4" width="29.81761363636364" height="57.599999999999994"--}}
                                  {{--rx="0" ry="0" fill="#1bb99a" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                            {{--<rect x="812.8191761363637" y="76.20000000000002" width="29.81761363636364" height="83.19999999999999"--}}
                                  {{--rx="0" ry="0" fill="#ebeff2" stroke="none" fill-opacity="1"--}}
                                  {{--style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;">--}}
                            {{--</rect>--}}
                        {{--</svg>--}}
                        {{--<div class="morris-hover morris-default-style" style="left: 557.096px; top: 107px;">--}}
                            {{--<div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #3db9dc">--}}
                                {{--Series A:--}}
                                {{--75--}}
                            {{--</div>--}}
                            {{--<div class="morris-hover-point" style="color: #1bb99a">--}}
                                {{--Series B:--}}
                                {{--65--}}
                            {{--</div>--}}
                            {{--<div class="morris-hover-point" style="color: #ebeff2">--}}
                                {{--Series C:--}}
                                {{--52--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div><!-- end col-->

            <div class="col-xs-12 col-lg-12 col-xl-4">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Trends Monthly</h4>

                    <div class="text-xs-center m-b-20">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-sm btn-secondary">Today</button>
                            <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                            <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                        </div>
                    </div>

                    <div id="morris-donut-example" style="height: 263px;">
                        <svg height="263" version="1.1" width="414" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             style="overflow: hidden; position: relative; left: -0.75px;">
                            {{--<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>--}}
                            {{--<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>--}}
                            {{--<path fill="none" stroke="#3db9dc" d="M207,212.5A81,81,0,0,0,283.6590235852246,157.66092702791667" s--}}
                                  {{--troke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>--}}
                            {{--<path fill="#3db9dc" stroke="#ffffff"--}}
                                  {{--d="M207,215.5A84,84,0,0,0,286.49824668097364,158.62985025117285L317.2564968849218,169.12651850311474A116.5,116.5,0,0,1,207,248Z"--}}
                                  {{--stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<path fill="none" stroke="#1bb99a"--}}
                                 {{--d="M283.6590235852246,157.66092702791667A81,81,0,0,0,134.35663179554166,95.66787675965199"--}}
                                 {{--stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>--}}
                            {{--<path fill="#1bb99a" stroke="#ffffff"--}}
                                  {{--d="M286.49824668097364,158.62985025117285A84,84,0,0,0,131.666136676858,94.34076108408354L98.03494769331246,77.75181513947797A121.5,121.5,0,0,1,321.98853537783685,170.74139054187503Z"--}}
                                  {{--stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<path fill="none" stroke="#ebeff2"--}}
                                 {{--d="M134.35663179554166,95.66787675965199A81,81,0,0,0,206.97455309992458,212.49999600281024"--}}
                                 {{--stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>--}}
                            {{--<path fill="#ebeff2" stroke="#ffffff"--}}
                                  {{--d="M131.666136676858,94.34076108408354A84,84,0,0,0,206.973610622144,215.49999585476618L206.96340044618785,247.9999942509555A116.5,116.5,0,0,1,102.51910622445186,79.96367459875873Z"--}}
                                  {{--stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">--}}
                            {{--</path>--}}
                            {{--<text x="207" y="121.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px"--}}
                                  {{--stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;"--}}
                                  {{--font-weight="800" transform="matrix(1.0474,0,0,1.0474,-9.8094,-6.1644)"--}}
                                  {{--stroke-width="0.9547539437585734">--}}
                                {{--<tspan dy="5.4140625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Italian Language 02</tspan>--}}
                            {{--</text>--}}
                            {{--<text x="207" y="141.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none"--}}
                                  {{--fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;"--}}
                                  {{--transform="matrix(1.6875,0,0,1.6875,-142.3018,-91.7813)"--}}
                                  {{--stroke-width="0.5925925925925926">--}}
                                {{--<tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan>--}}
                            {{--</text>--}}
                        </svg>
                    </div>

                    <div class="text-xs-center">
                        <ul class="list-inline chart-detail-list m-b-0">
                            <li class="list-inline-item">
                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>English</h6>
                            </li>
                            <li class="list-inline-item">
                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Italian</h6>
                            </li>
                            <li class="list-inline-item">
                                <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>French</h6>
                            </li>
                        </ul>
                    </div>

                </div>
            </div><!-- end col-->


        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xs-12 col-lg-12 col-xl-7">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Inbox</h4>

                            <div class="inbox-widget nicescroll" style="height: 320px; overflow: hidden; outline: none;" tabindex="5000">
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-1.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Chadengle</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">13:40 PM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-2.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-3.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-4.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-5.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-6.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Adhamdannaway</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">9:56 AM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-8.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Arashasghari</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                                <a href="http://alpha.homedeliverynetwork.net/index.html#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="/images/avatar-9.jpg" class="img-circle" alt=""></div>
                                        <p class="inbox-item-author">Joshaustin</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">9:56 AM</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                            <p class="font-600 m-b-5">iMacs <span class="text-danger pull-right"><b>79%</b></span></p>
                            <progress class="progress progress-striped progress-xs progress-danger m-b-0" value="79" max="100">79%
                            </progress>
                        </div>

                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Monthly Sales</h4>

                            <p class="font-600 m-b-5">Macbooks <span class="text-success pull-right"><b>30%</b></span></p>
                            <progress class="progress progress-striped progress-xs progress-success m-b-0" value="30" max="100">30%
                            </progress>
                        </div>

                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-20">Daily Sales</h4>

                            <p class="font-600 m-b-5">Mobiles <span class="text-warning pull-right"><b>50%</b></span></p>
                            <progress class="progress progress-striped progress-xs progress-warning m-b-0" value="50" max="100">50%
                            </progress>
                        </div>

                    </div>

                </div>
            </div><!-- end col-->

            <div class="col-xs-12 col-lg-12 col-xl-5">
                <div class="card-box">

                    <h4 class="header-title m-t-0 m-b-30">Top Contracts</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                            <tr>
                                <th>Company</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-muted">Apple Technology</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Envato Pty Ltd.</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-danger">Unpaid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Dribbble LLC.</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Adobe Family</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Apple Technology</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-danger">Unpaid</span></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Envato Pty Ltd.</th>
                                <td>20/02/2014</td>
                                <td>19/02/2020</td>
                                <td><span class="label label-success">Paid</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div><!-- end col-->


        </div>
        <!-- end row -->
@endsection


@section('page-js')

<!-- App js -->
<div id="ascrail2000" class="nicescroll-rails" style="width: 8px; z-index: auto; cursor: default; position: absolute; top: 863px; left: 456.75px; height: 320px; opacity: 0;">
    <div style="position: relative; top: 0px; float: right; width: 6px; height: 210px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(152, 166, 173); background-clip: padding-box;"></div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails" style="height: 8px; z-index: auto; top: 1175px; left: 109.75px; position: absolute; cursor: default; display: none; width: 347px; opacity: 0;">
    <div style="position: relative; top: 0px; height: 6px; width: 355px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(152, 166, 173); background-clip: padding-box;"></div>
</div>

<!-- Page specific js -->
<script src="/js/jquery.dashboard.js"></script>

@endsection