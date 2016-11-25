@extends('layouts.basic')

@section('basic-content')
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        @include('layouts.messages')

        <div class="account-bg">
            <div class="card-box m-b-0">
                <div class="text-xs-center m-t-20">
                <h6 class="text-muted text-uppercase m-b-0 m-t-0">BUY WEED ONLINE</h6>
                    <a href="{{url('/')}}" class="logo">
                        <img style="max-width: 150px;" src="/images/logo.jpg">
                        <span>{{config('app.name')}}</span>
                    </a>
                </div>
                <div class="m-t-10 p-20">
                    <div class="row">
                        <div class="col-xs-12 text-xs-center">
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign Up</h6>
                        </div>
                    </div>
                    {{Form::open([
                        'url' => url('/register'),
                        'method' => 'POST',
                        'class' => 'm-t-20',
                        'files' => true
                    ])}}

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required autofocus
                                       placeholder="First Name*" value="{{ old('name') }}"
                                       id="name" type="text" name="name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required autofocus
                                       placeholder="Last Name*" value="{{ old('last_name') }}"
                                       id="last_name" type="text" name="last_name">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required autofocus
                                       placeholder="E-mail Address*" value="{{ old('email') }}"
                                       id="email" type="email" name="email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required autofocus
                                       data-mask="(999) 999-9999"
                                       placeholder="Phone number" value="{{ old('phone') }}"
                                       id="phone" type="text" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" role="uploadcare-uploader" name="picture">
                            <input type="hidden" name="UPLOADCARE_STORE" value="1">
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control"
                                       placeholder="Refer a Friend Code"
                                       title="Did a friend Refer you? Enter your friend's code here"
                                       id="referral_code" type="text" name="referral_code" value="{{{ $code ?? '' }}}">
                                @if ($errors->has('referral_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('referral_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required
                                       placeholder="Password"
                                       id="password" type="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" required
                                       placeholder="Re-type your Password"
                                       id="password-confirm" type="password" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" checked="checked">
                                    <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-10">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Join Now</button>
                            </div>
                        </div>

                        {{--<div class="form-group row m-t-30 m-b-0">--}}
                        {{--<div class="col-sm-12 text-xs-center">--}}
                        {{--<h5 class="text-muted"><b>Sign up with</b></h5>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row m-b-0 text-xs-center">--}}
                        {{--<div class="col-sm-12">--}}
                        {{--<button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">--}}
                        {{--<i class="fa fa-facebook m-r-5"></i> Facebook--}}
                        {{--</button>--}}

                        {{--<button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">--}}
                        {{--<i class="fa fa-twitter m-r-5"></i> Twitter--}}
                        {{--</button>--}}

                        {{--<button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">--}}
                        {{--<i class="fa fa-google-plus m-r-5"></i> Google+--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                    {{Form::close()}}

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end card-box-->

        <div class="m-t-20">
            <div class="text-xs-center">
                <p class="text-white">
                    Already have an account? <a href="{{url('/login')}}" class="text-white m-l-5">
                        <b>Sign In</b></a>
                </p>
            </div>
        </div>
    </div>
    <!-- end wrapper page -->
@endsection

@section('page-js')
    <script src="/js/bootstrap-inputmask.min.js"></script>
@endsection