@extends('layouts.app')

@section('head-extensions')

@endsection

@section('settings-menu')
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url("/user/profile") }}">Profile</a>
        <a class="dropdown-item" href="{{ url("/user/settings") }}">Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
    </div>
@endsection

@section('page-title')
    {{{ Auth::user()->name }}}'s Settings
@endsection

@section('content')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 m-t-20">
        <h4 class="header-title m-t-0">Settings</h4>
        <p class="text-muted font-13 m-b-10">
            Here you can check out and update your settings.
        </p>

        <div class="p-20">

            {{Form::open([
                'url' => 'user/settings',
                'method' => 'POST',
                'class' => 'form-horizontal'
            ])}}

            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card-box tilebox-three">
                    <div class="bg-icon pull-xs-left">
                        <i class="icon-equalizer"></i>
                    </div>
                    <div class="text-xs-right">
                        <h6 class="text-purple text-uppercase m-b-15 m-t-10"
                            title="Uncheck if you want to stop receiving e-mail notifications">
                            Enable Notifications
                        </h6>
                        <h2 class="m-b-10">
                            {{Form::checkbox('enable_notifications', 1,
                                !(Auth::user()->settings) || Auth::user()->settings->enable_notifications == true, [
                                'data-plugin' => 'switchery',
                                'data-color' => "purple"
                            ])}}
                        </h2>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Update Settings
                    </button>
                </div>
            </div>

            {{Form::close()}}
        </div>

    </div>
@endsection

@section('page-js')
<script src="/js/user/profile.js"></script>
<script>
    function editPassword() {
        if($('#password').is('[readonly]')) {
            $('#password').prop('readonly', false);
            $('#password').prop('placeholder', 'Type your new password');

            $('#password-confirm').prop('readonly', false);
            $('#password-confirm').prop('placeholder', 'Confirm your new password');
        }
        else {
            $('#password').prop('readonly', true);
            $('#password').prop('placeholder', '******');
            $('#password').val('');

            $('#password-confirm').prop('readonly', true);
            $('#password-confirm').prop('placeholder', '******');
            $('#password-confirm').val('');
        }
    }

    $(document).ready(function () {
        textFromProfile();
    });
</script>
@endsection