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