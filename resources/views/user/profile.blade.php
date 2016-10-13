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
    {{{ Auth::user()->name }}}'s Profile and Settings
@endsection

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 m-t-20">
        <h4 class="header-title m-t-0">Profile</h4>
        <p class="text-muted font-13 m-b-10">
            Here you can check out and update your profile.
        </p>

        <div class="p-20">
            {{Form::open([
                'url' => 'user/profile',
                'method' => 'POST',
                'class' => 'form-horizontal',
                'files' => true
            ])}}


            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card-box widget-user">
                    <div>
                        <img src="{{{ Auth::user()->pictureUrl() }}}" class="img-responsive img-circle" alt="user">
                        <div class="wid-u-info">
                            <h4 class="col-lg-10 col-md-10 col-sm-10 m-t-20 m-b-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" required id="name" name="name"
                                           data-parsley-id="34" value="{{{ Auth::user()->name }}}">
                                </div>
                            </h4>
                            <p class="text-muted m-b-0 font-13">{{{ Auth::user()->email }}}</p>
                            <div class="user-position">
                                <span class="profile text-info font-weight-bold">{{{ Auth::user()->profile() }}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('picture', 'Update your avatar:')}}
                {{Form::file('picture', [
                    'class' => 'form-control',
                    'value' => 'Update avatar'
                ])}}
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <a title="Edit Password" onclick="editPassword();">
                    <i class="ion-edit"></i>
                </a>
                <div>
                    <input type="password" id="password" name="password" class="form-control"
                           readonly data-parsley-id="36"
                           title="Click on Edit Password to enable this field."
                           placeholder="******">
                </div>
                <div class="m-t-10">
                    <input type="password" id="password-confirm" name="password_confirmation"
                           readonly class="form-control"
                           title="Click on Edit Password to enable this field."
                           data-parsley-equalto="#password"
                           placeholder="******" data-parsley-id="38">
                </div>
            </div>


            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Update Profile
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