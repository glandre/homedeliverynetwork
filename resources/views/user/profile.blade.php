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
    {{{ Auth::user()->name }}}'s Profile
@endsection

@section('content')
    <div class="col-sm-6 col-xs-12 m-t-20">
        <h4 class="header-title m-t-0">{{{ Auth::user()->name }}}'s Profile</h4>
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
            {{Form::hidden('id', $model->id)}}


            <div class="form-group">
                {{Form::label('picture', 'Avatar:')}}
                {{Form::file('picture', [
                    'class' => 'form-control',
                    $readonly,
                    $disabled
                ])}}
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" required id="name" name="name"
                       data-parsley-id="34" value="{{{ Auth::user()->name }}}">
            </div>

            <div class="form-group">
                <label for="email">E-Mail</label>
                <div>
                    <input type="email" name="email" id="email" class="form-control" required=""
                           readonly alt="The e-mail is used for authentication. To update it, contact an Administrator"
                           parsley-type="email" data-parsley-id="40" value="{{{ Auth::user()->email }}}">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <div>
                    <input type="password" id="password" name="password" class="form-control"
                           readonly data-parsley-id="36"
                           alt="Click on Update Password to enable this field."
                           placeholder="******">
                </div>
                <div class="m-t-10">
                    <input type="password" id="password-confirm" name="password_confirmation"
                           readonly class="form-control"
                           alt="Click on Update Password to enable this field."
                           data-parsley-equalto="#password"
                           placeholder="******" data-parsley-id="38">
                </div>
            </div>

            <div class="form-group">
                @if($saveEnabled)
                    {{Form::checkbox('is_super', 1, $model->is_super)}}
                    {{Form::label('is_super', 'Super User')}}
                @else
                    {{Form::label(
                        'isSuper',
                        'Super? ' . ($model->is_super ? trans('strings.yes') : trans('strings.no')) . '.'
                    )}}
                @endif
            </div>

            @if($saveEnabled)
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                        </button>
                    </div>
                </div>
            @endif
            {{Form::close()}}
        </div>

    </div>
@endsection

@section('page-js')

@endsection