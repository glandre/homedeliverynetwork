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
        <a class="dropdown-item" href="{{ url('/products/create') }}">Create a New Product</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/home') }}">Back to Dashboard</a>
    </div>
@endsection

@section('page-title')
    Manage Products
@endsection

@section('content')
<div class="row">
                            
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                               <a href="{{ url('/products/create') }}"> <div class="card-box tilebox-one">
                                    <i class="zmdi zmdi-shopping-basket text-muted"></i>
                           <br>   <br>
                                    <h6 class="text-muted text-uppercase m-b-20">Add <br>New Product</h6>
                                   
                                    <span class=""> </span> <span class="text-muted"></span>
                                </div></a>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                  <a href="{{url('/products/inventory')}}"> <div class="card-box tilebox-one">
                                    <i class="zmdi zmdi-chart text-muted"></i>
                           <br>   <br>
                                    <h6 class="text-muted text-uppercase m-b-20">Update <br>Inventory</h6>
                                   
                                    <span class=""> </span> <span class="text-muted"></span>
                                </div></a>
                            </div>
                        </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Managing products:</b></h4>
                <p class="text-muted font-13 m-b-30">
                    These are the products available in the inventory.
                    Click on a product name to view its description and edit it.
                </p>

                <div id="" class="">
                    <div class="row">
                       @foreach($products as $product)
                            <div class="col-sm-4 col-lg-3 col-xs-12">

                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ $product->picture }}" alt="Card image cap" style="height: 200px; width: auto; margin-left: auto; margin-right: auto; margin-top: 10px;">
                                    <div class="card-block">
                                        <h4 class="card-title"> {{ $product->name }}</h4>
                                        <p class="card-text"> {{ $product->description }}</p>
                                        <p class="card-text"> Inventory {{ $product->quantity }}</p>
                                        <div class="btn btn-group"> 
                                        <a href="{{ url("/products/{$product->id}/edit") }}"" class="btn btn-success">Edit Product</a>
                                         <!-- <a href="{{ url("/products/{$product->id}/edit") }}" class="btn btn-primary">Update inventory</a> -->
                                         </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                           
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