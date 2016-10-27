@extends('layouts.basic')

<!-- Main Content -->
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
                <form class="m-t-20" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <div class="col-xs-12">
                            <input class="form-control" required autofocus
                                   placeholder="E-mail Address" value="{{ old('email') }}"
                                   id="email" type="email" name="email">
                        </div>
                    </div>

                    <div class="form-group text-center row m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>

                </form>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end card-box-->

</div>
@endsection
