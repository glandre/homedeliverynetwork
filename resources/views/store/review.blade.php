@extends('layouts.app')

@section('head-extensions')

    <!-- DataTables -->
    <link href="/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

@endsection

@section('settings-menu')
    <div class="dropdown-menu">
        {{--<a class="dropdown-item" href="{{ url('/products/create') }}">Create a New Product</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a class="dropdown-item" href="{{ url('/home') }}">Back to Dashboard</a>--}}
    </div>
@endsection

@section('page-title')
    Review Order
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Review Order:</b></h4>
                <p class="text-muted font-13 m-b-30">
                    These are the products in your shopping cart.
                    Click on submit to finish your order.
                <div class="row">
                    @if($order->status == 'Cart')

                        {{Form::open([
                            'url' => url("/orders/{$order->id}/new"),
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                        ])}}

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <a href="{{ url('/store') }}">
                                    <span class="btn btn-primary waves-effect waves-light">
                                        Back to Store
                                    </span>
                                </a>
                            </div>
                        </div>

                        {{Form::close()}}

                    @endif
                </div>




                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer"
                                   role="grid" aria-describedby="datatable_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279.5px;">Product
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279.5px;">Quantity
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279.5px;">Price Each
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279.5px;">Type
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 279.5px;">Vendor
                                    </th>
                                    @if($order->status == 'Cart')
                                    <th></th>
                                    @endif
                                </tr>
                                </thead>


                                <tbody>

                                @foreach($order->products as $product)
                                <tr role="row" class="odd">
                                    <td class="sorting_asc">
                                        {{{ $product->name }}}
                                    </td>
                                    <td class="sorting_asc">
                                        {{{ ($product->pivot->quantity > 0) ? $product->pivot->quantity : 'N/A' }}}
                                        {{ ($product->pivot->quantity > $product->quantity) ? '(Not available in inventory)' : '' }}
                                    </td>
                                    <td class="sorting_asc">
                                        {{{ $product->price }}}
                                    </td>
                                    <td class="sorting_asc">
                                        {{{ $product->type->name }}}
                                    </td>
                                    <td class="sorting_asc">
                                        {{{ $product->vendor->name }}}
                                    </td>
                                    @if($order->status == 'Cart')
                                    <td>
                                        {{Form::open([
                                            'url' => "store/cart/remove/$product->id",
                                            'method' => 'DELETE'
                                        ])}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">
                                            Remove
                                        </button>
                                        {{Form::close()}}
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->

@endsection

@section('page-js')

    <!-- Required datatable js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/js/dataTables.buttons.min.js"></script>
    <script src="/js/buttons.bootstrap4.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/js/dataTables.responsive.min.js"></script>
    <script src="/js/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>

@endsection