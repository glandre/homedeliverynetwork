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
        <a class="dropdown-item" href="{{ url('/users/create') }}">Create a New User</a>
        <a class="dropdown-item" href="JavaScript:switchView()" id="showMenuItem">Show Users Table</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/home') }}">Back to Dashboard</a>
    </div>
@endsection

@section('page-title')
    Manage Users
@endsection

@section('content')

    <input hidden id="activeView" value="users_widget" />

    <div class="row" id="users_table" style="display: none;">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Managing users:</b></h4>
                <p class="text-muted font-13 m-b-30">
                    All users registered in the system is presented bellow.
                    Click on a user name to view his/her information and edit it.
                </p>

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
                                        style="width: 279.5px;">Name
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="E-mail: activate to sort column descending"
                                        style="width: 279.5px;">E-mail
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Profile: activate to sort column descending"
                                        style="width: 279.5px;">Profile
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Type: activate to sort column descending"
                                        style="width: 279.5px;">Type
                                    </th>
                                </tr>
                                </thead>


                                <tbody>

                                @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td class="sorting_
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>1">
                                        <a href="{{ url("/users/{$user->id}") }}">
                                            {{{ $user->name }}}
                                        </a>
                                    </td>
                                    <td>{{{ $user->email }}}</td>
                                    <td>Profile</td>
                                    <td>{{{ $user->profile() }}}</td>
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

    <div class="row" id="users_widget" style="display: none;">
        @foreach($users as $user)
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box widget-user">
                <div>
                    <img src="{{{ $user->pictureUrl() }}}" class="img-responsive img-circle" alt="user">
                    <div class="wid-u-info">
                        <h5 class="m-t-20 m-b-5">
                            <a href="{{ url("/users/{$user->id}") }}">
                                {{{ $user->name }}}
                            </a>
                        </h5>
                        <p class="text-muted m-b-0 font-13">{{{ $user->email }}}</p>
                        <div class="user-position">
                            <span class="profile text-warning font-weight-bold">{{{ $user->profile() }}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

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

    <script src="/js/user/profile.js"></script>

    <script type="text/javascript">

        function switchView() {
            $('#users_table').attr('style', 'display: none');
            $('#users_widget').attr('style', 'display: none');
            $('#' + $('#activeView').val()).attr('style', 'display: inline');

            if($('#activeView').val() == 'users_table') {
                $('#activeView').val('users_widget');
                $('#showMenuItem').html('Show Users Widgets');
            }
            else {
                $('#activeView').val('users_table');
                $('#showMenuItem').html('Show Users Table');
            }
        }

        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

            switchView();
            textFromProfile();
        } );

    </script>

@endsection