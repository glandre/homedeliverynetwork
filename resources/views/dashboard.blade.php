@extends('layouts.app')


@section('head-extensions')
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/css/morris.css">

    <!-- Switchery css -->
    <link href="/css/switchery.min.css" rel="stylesheet">
@endsection

@section('settings-menu')
   
@endsection

@section('page-title')
    Dashboard
@endsection

@section('content')

    <div class="left side-menu">

                  <div class="row">
                            
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                               <a href="{{ url('/products/create') }}"> <div class="card-box tilebox-one">
                                    <i class="zmdi zmdi-shopping-basket text-muted"></i>
                           <br>   <br>
                                    <h6 class="text-muted text-uppercase m-b-20">Add <br>New Product</h6>
                                   
                                    <span class=""> </span> <span class="text-muted"></span>
                                </div></a>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                 <a href="{{ url('/orders-new') }}"> <div class="card-box tilebox-one">
                                    <i class="zmdi zmdi-local-shipping text-muted"></i>
                           <br>   <br>
                                    <h6 class="text-muted text-uppercase m-b-20">View <br>Recent Orders</h6>
                                   
                                    <span class=""> </span> <span class="text-muted"></span>
                                </div></a>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                   <a href="{{ url('/users/create') }}"> <div class="card-box tilebox-one">
                                    <i class="ion-person-add text-muted"></i>
                           <br>   <br>
                                    <h6 class="text-muted text-uppercase m-b-20">Add <br>Staff Member</h6>
                                   
                                    <span class=""> </span> <span class="text-muted"></span>
                                </div></a>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                  <a href="{{url('/products/inventory')}}"> <div class="card-box tilebox-one">
                                    <i class="zmdi zmdi-chart text-muted"></i>
                           <br>   <br>
                                    <h6 class="text-muted text-uppercase m-b-20">Update <br>Inventory</h6>
                                   
                                    <span class=""> </span> <span class="text-muted"></span>
                                </div></a>
                            </div>
                        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-layers pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                    <h2 class="m-b-20" data-plugin="counterup">25</h2>
                    {{--<span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>--}}
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-paypal pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                    <h2 class="m-b-20">$<span data-plugin="counterup">{{ \App\Order::revenue() }}</span></h2>
                    {{--<span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>--}}
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-chart pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                    <h2 class="m-b-20">
                        $<span data-plugin="counterup">
                            {{ \App\Order::averagePrice() }}
                        </span>
                    </h2>
                    {{--<span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>--}}
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                    <h2 class="m-b-20" data-plugin="counterup">{{ \App\Order::productSold() }}</h2>
                    {{--<span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>--}}
                </div>
            </div>
        </div>
        <!-- end row -->


        {{--@include('sales-statistics');--}}


    
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