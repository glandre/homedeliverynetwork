@extends('layouts.app')

@section('head-extensions')
    <script>
        function deleteItem() {
            if(confirm('Are you sure you want to delete {{ $model->name }}?')) {
                document.getElementById('delete{{ $model->id }}').submit();
            }
        }
    </script>
@endsection

@section('settings-menu')
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url("/users/{$model->id}/edit") }}">Edit User</a>
        <a class="dropdown-item" href="{{ url("/users/{$model->id}") }}">View User</a>
        <a class="dropdown-item"
           href="Javascript:deleteItem()">
            Delete User
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/users') }}">Back to User's List</a>
    </div>

    {{Form::open([
        'url' => "/users/{$model->id}",
        'method' => 'delete',
        'id' => 'delete' . $model->id,
        'name' => 'delete' . $model->id
    ])}}
    {{Form::close()}}
@endsection

@section('page-title')
{{{ $title }}} User
@endsection

@section('content')

    <div class="col-sm-6 col-xs-12 m-t-20">
        <h4 class="header-title m-t-0">{{{ $title }}} User</h4>
        <p class="text-muted font-13 m-b-10">
            Here you can view user information. Click on edit to enable updates.
        </p>

        <div class="">
            <img src="{{ $model->picture }}" style="height:120px;width:auto;">
        </div>

        <div class="p-20">
            @if($model->registration_status == 'New')
                <div class="form-group row">
                    <div class="column">
                        <button type="submit" id="btnApproveReject"
                                class="btn btn-primary waves-effect waves-light"
                                id="reject" onclick="enableReasons();">
                            Approve/Reject
                        </button>
                        {{Form::open([
                            'url' => "users/{$model->id}/approve",
                            'method' => 'POST',
                            'id' => 'formApprove'
                        ])}}
                            {{Form::hidden('id', $model->id)}}
                        {{Form::close()}}

                        {{Form::close()}}

                        {{Form::open([
                            'url' => "users/{$model->id}/reject",
                            'method' => 'POST'
                        ])}}
                        {{Form::hidden('id', $model->id)}}
                        {{Form::textarea('reasons', '', [
                            'class' => 'form-control',
                            'style' => 'display: none',
                            'id' => 'reasons'
                        ])}}
                        <button type="reset" id="btnApprove" style="display:none"
                                onclick="approve()"
                                class="btn btn-primary waves-effect m-l-5">
                            Approve
                        </button>
                        <button type="submit" id="btnReject" style="display:none"
                                class="btn btn-danger waves-effect waves-light"
                                id="reject">
                            Reject
                        </button>

                        {{Form::close()}}
                    </div>
                </div>
            @endif

            {{Form::open([
                'url' => $url,
                'method' => $method,
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
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" required id="name" name="name"
                           {{ $readonly }} data-parsley-id="34" value="{{{ $model->name }}}">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" required id="last_name" name="last_name"
                           {{ $readonly }} data-parsley-id="34" value="{{{ $model->last_name }}}">
                </div>

                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <div>
                        <input type="email" name="email" id="email" class="form-control" required="" {{ $readonly }}
                               parsley-type="email" data-parsley-id="40" value="{{{ $model->email }}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <div>
                        <input class="form-control" required autofocus
                               data-mask="(999) 999-9999"
                               {{ $readonly }}
                               placeholder="Phone Number" value="{{ $model->phone }}"
                               id="phone" type="text" name="phone">
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
                        <input type="password" id="password-confirm" name="password_confirmation"
                               {{ $readonly }} class="form-control"
                               data-parsley-equalto="#password"
                               placeholder="Re-Type Password" data-parsley-id="38">
                    </div>
                </div>
            @if($saveEnabled && !$model->isSuper())
                <div class="form-group">

                    {{Form::label('registration_status', 'Registration Status:')}}

                    {{Form::select('registration_status', $model->pluckRegistrationStatus(), $model->registration_status, [
                        $readonly,
                        $disabled,
                        'class' => 'form-control'
                    ])}}
                </div>

                <div class="form-group">

                        {{Form::label('role_id', 'Role:')}}

                        {{Form::select('role_id', (new App\Role())->pluckNames(), $model->role->id ?? null, [
                            $readonly,
                            'class' => 'form-control'
                        ])}}

                </div>

                <div class="form-group">
                    {{Form::label(
                        'referrer',
                        'Referrer: ' . ($model->referrer->name ?? '-')
                    )}}
                </div>
            @else
                <div class="form-group">
                    {{Form::label(
                        'role',
                        'Role: ' . $model->role->name
                    )}}

                    -
                    {{Form::label(
                        'referrer',
                        'Referrer: ' . ($model->referrer->name ?? '-')
                    )}}
                </div>
            @endif

            ({{Form::label('registration_status', 'Registration Status: ' . $model->registration_status)}})

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
    <script src="/js/bootstrap-inputmask.min.js"></script>
    <script>
        function enableReasons() {
            event.preventDefault();
            $('#reasons').attr('style', 'diplay: inline').focus();
            $('#btnApprove').attr('style', 'display: inline');
            $('#btnReject').attr('style', 'display: inline');
            $('#btnApproveReject').attr('style', 'display: none');
            return false;
        }
        function approve() {
            event.preventDefault();
            document.getElementById('formApprove').submit();
        }
    </script>
@endsection