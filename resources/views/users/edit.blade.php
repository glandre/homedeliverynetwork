@extends('layouts.app')

@section('head-extensions')

@endsection

@section('settings-menu')
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url("/users/{$model->id}/edit") }}">Edit User</a>
        <a class="dropdown-item" href="{{ url("/users/{$model->id}") }}">View User</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/users') }}">Back to User's List</a>
    </div>
@endsection

@section('page-title')
{{{ $title }}}
@endsection

@section('content')
    <div class="col-sm-6 col-xs-12 m-t-20">
        <h4 class="header-title m-t-0">{{{ $title }}} User</h4>
        <p class="text-muted font-13 m-b-10">
            Here you can view user information. Click on edit to enable updates.
        </p>

        <div class="p-20">
            {{Form::open([
                'url' => $url,
                'method' => $method,
                'class' => 'form-horizontal'
            ])}}
                {{Form::hidden('id', $model->id)}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required id="name" name="name"
                           {{ $readonly }} data-parsley-id="34" value="{{{ $model->name }}}">
                </div>

                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <div>
                        <input type="email" name="email" id="email" class="form-control" required="" {{ $readonly }}
                               parsley-type="email" data-parsley-id="40" value="{{{ $model->email }}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Password</label>
                    <div>
                        <input type="password" id="password" name="password" class="form-control"
                               {{ $readonly }} data-parsley-id="36"
                               placeholder="Type a new password (optional)">
                    </div>
                    <div class="m-t-10">
                        <input type="password" id="password-confirm" name="password-confirm"
                               {{ $readonly }} class="form-control"
                               data-parsley-equalto="#password"
                               placeholder="Re-Type Password" data-parsley-id="38">
                    </div>
                </div>

                <div class="form-group">
                    @if(!empty($readonly))
                        {{Form::label(
                            'isSuper',
                            'Super? ' . ($model->is_super ? trans('strings.yes') : trans('strings.no')) . '.'
                        )}}
                    @else
                        {{Form::label('is_super', 'Super')}}
                        {{Form::checkbox('is_super', $model->is_super, [
                            'readonly','disabled',
                            'class' => 'form-control'
                        ])}}
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