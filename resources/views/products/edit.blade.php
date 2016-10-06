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
        <a class="dropdown-item" href="{{ url("/products/{$model->id}/edit") }}">Edit Product</a>
        <a class="dropdown-item" href="{{ url("/products/{$model->id}") }}">View Product</a>
        <a class="dropdown-item"
           href="Javascript:deleteItem()">
            Delete Product
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/products') }}">Back to Product's List</a>
    </div>

    {{Form::open([
        'url' => "/products/{$model->id}",
        'method' => 'delete',
        'id' => 'delete' . $model->id,
        'name' => 'delete' . $model->id
    ])}}
    {{Form::close()}}
@endsection

@section('page-title')
{{{ $title }}} Product
@endsection

@section('content')
    <div class="col-sm-6 col-xs-12 m-t-20">
        <h4 class="header-title m-t-0">{{{ $title }}} Product</h4>
        <p class="text-muted font-13 m-b-10">
            Here you can view product information. Click on edit to enable updates.
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
                    <label for="description">Description</label>
                    <textarea class="form-control" required id="description" name="description"
                           {{ $readonly }} data-parsley-id="34">{{{ $model->description }}}</textarea>
                </div>

                <div class="form-group">
                    <label for="name">Quantity Incoming</label>
                    <input type="text" class="form-control" id="incoming" name="incoming"
                           {{ $readonly }} data-parsley-id="34"
                           value="{{{ $model->incoming }}}"
                    >
                </div>

                <div class="form-group">
                    <label for="name">Quantity in the Inventory</label>
                    <input type="text" class="form-control" required id="quantity" name="quantity"
                           {{ $readonly }} data-parsley-id="34"
                           value="{{{ $model->quantity }}}"
                    >
                </div>

                <div class="form-group">
                    {{Form::label('type_id', 'Type:')}}

                    {{Form::select('type_id', (new App\ProductType())->pluckNames(), [
                        $readonly,
                        'class' => 'selectpicker'
                    ])}}
                </div>

                <div class="form-group">
                    {{Form::label('vendor_id', 'Vendor:')}}

                    {{Form::select('vendor_id', (new App\Vendor())->pluckNames(), [
                        $readonly,
                        'class' => 'selectpicker'
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