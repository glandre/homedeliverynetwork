@extends('layouts.basic')

@section('basic-content')
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        @include('layouts.messages')

        <div class="account-bg">
            <div class="card-box m-b-0">
                <div class="text-xs-center m-t-20">
                    <a href="{{url('/')}}" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>{{config('app.name')}}</span>
                    </a>
                </div>
                <div class="m-t-10 p-20">
                    <div class="row">
                        <div class="col-xs-12 text-xs-center">
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                        </div>
                    </div>
                    <form class="m-t-20" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required autofocus
                                       placeholder="E-mail Address" value="{{ old('email') }}"
                                       id="email" type="email" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required
                                       placeholder="Password"
                                       id="password" type="password" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="remember" name="remember" type="checkbox">
                                    <label for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-10">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="{{ url('/password/reset') }}"
                                   class="text-muted">
                                    <i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>

                        {{--<div class="form-group row m-t-30 m-b-0">--}}
                            {{--<div class="col-sm-12 text-xs-center">--}}
                                {{--<h5 class="text-muted"><b>Sign in with</b></h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </form>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end card-box-->

        <div class="m-t-20">
            <div class="text-xs-center">
                <p class="text-white">
                    Don't have an account? <a href="{{url('/register')}}" class="text-white m-l-5">
                    <b>Sign Up</b></a>
                </p>
            </div>
        </div>
    </div>
    <!-- end wrapper page -->
@endsection