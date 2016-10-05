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


        {{--@include('sales-statistics');--}}


        <div class="row">
            <div class="col-xs-12 col-lg-12 col-xl-7">
                <div class="row">
                    {{--@include('inbox')--}}

                    <div class="col-xs-12 col-md-12">
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