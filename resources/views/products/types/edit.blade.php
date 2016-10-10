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
        <a class="dropdown-item" href="{{ url("/product-types/{$model->id}/edit") }}">Edit Product Type</a>
        <a class="dropdown-item" href="{{ url("/product-types/{$model->id}") }}">View Product Type</a>
        <a class="dropdown-item"
           href="Javascript:deleteItem()">
            Delete Product Type
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/product-types') }}">Back to Product Types's List</a>
    </div>

    {{Form::open([
        'url' => "/product-types/{$model->id}",
        'method' => 'delete',
        'id' => 'delete' . $model->id,
        'name' => 'delete' . $model->id
    ])}}
    {{Form::close()}}
@endsection

@section('page-title')
{{{ $title }}} Product Type
@endsection

@section('content')
    <div class="col-sm-6 col-xs-12 m-t-20">
        <h4 class="header-title m-t-0">{{{ $title }}} Product Type</h4>
        <p class="text-muted font-13 m-b-10">
            Here you can view product type information. Click on edit to enable updates.
        </p>

        <div class="p-20">
            {{Form::open([
                'url' => $url,
                'method' => $method,
                'class' => 'form-horizontal',
                'files' => true
            ])}}
                {{Form::hidden('id', $model->id)}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required id="name" name="name"
                           {{ $readonly }} data-parsley-id="34" value="{{{ $model->name }}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" required id="description" name="description"
                           {{ $readonly }} data-parsley-id="34">{{{ $model->description }}}</textarea>
                </div>

                <div class="form-group">
                    {{Form::label('picture', 'Default Picture:')}}
                    {{Form::file('picture', [
                        'class' => 'form-control',
                        $readonly,
                        $disabled
                    ])}}
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