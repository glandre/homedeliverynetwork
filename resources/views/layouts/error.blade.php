@extends('layouts.basic')

@section('head-extensions')

@endsection

@section('content')
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        <div class="ex-page-content text-xs-center">
            <div class="text-error">4<span class="ion-sad"></span>4</div>
            <h3 class="text-uppercase text-white font-600">@yeld('title')</h3>
            <p class="text-white m-t-30">
                @yield('message')
            </p>
            <br>
            <a class="btn btn-pink waves-effect waves-light" href="{{ url('/home') }}"> Return Home</a>

        </div>


    </div>
    <!-- end wrapper page -->
@endsection

@section('page-js')

@endsection