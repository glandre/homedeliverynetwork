@extends('layouts.basic')

@section('navigation-bar')

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{ url('/home') }}" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>{{ config('app.name') }}</span>
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras">

                    <ul class="nav navbar-nav pull-right">

                        <li class="nav-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="nav-item hidden-sm-down">
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="http://alpha.homedeliverynetwork.net/index.html"><i class="fa fa-search"></i></a>
                            </form>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                               href="http://alpha.homedeliverynetwork.net/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">7</span>Notification</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                               href="http://alpha.homedeliverynetwork.net/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-email noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title bg-success">
                                    <h5><small><span class="label label-danger pull-xs-right">7</span>Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="/images/avatar-2.jpg" alt="img" class="img-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="/images/avatar-3.jpg" alt="img" class="img-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Carlos Crouch</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="/images/avatar-4.jpg" alt="img" class="img-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown"
                               href="http://alpha.homedeliverynetwork.net/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/images/avatar-1.jpg" alt="user" class="img-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('/logout') }}" class="dropdown-item notify-item"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                        </li>

                    </ul>

                </div> <!-- end menu-extras -->
                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->


        <div class="navbar-custom active">
            <div class="container">
                <div id="navigation" class="active">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="active">
                            <a href="{{ url('/dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>
                        {{--<li class="has-submenu">--}}
                            {{--<a href="http://alpha.homedeliverynetwork.net/index.html#">--}}
                                {{--<i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span>--}}
                            {{--</a>--}}
                            {{--<ul class="submenu megamenu">--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-buttons.html">Buttons</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-cards.html">Cards</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-dropdowns.html">Dropdowns</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-checkbox-radio.html">Checkboxs-Radios</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-navs.html">Navs</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-progress.html">Progress</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-modals.html">Modals</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-alerts.html">Alerts</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-bootstrap.html">Bootstrap UI</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-typography.html">Typography</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-notification.html">Notification</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/ui-carousel.html">Carousel</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/components-grid.html">Grid</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/components-range-sliders.html">Range sliders</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/components-sweet-alert.html">Sweet Alerts</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/components-ratings.html">Ratings</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/components-treeview.html">Treeview</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/components-tour.html">Tour</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/widgets-tiles.html">Tile Box</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/widgets-charts.html">Chart Widgets</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="has-submenu">--}}
                            {{--<a href="http://alpha.homedeliverynetwork.net/index.html#"><i class="zmdi zmdi-album"></i> <span> Icons </span> </a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-materialdesign.html">Material Design</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-ionicons.html">Ion Icons</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-fontawesome.html">Font awesome</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-themify.html">Themify Icons</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-simple-line.html">Simple line Icons</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-weather.html">Weather Icons</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-pe7.html">PE7 Icons</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/icons-typicons.html">Typicons</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="has-submenu">--}}
                            {{--<a href="http://alpha.homedeliverynetwork.net/index.html#"><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-elements.html">General Elements</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-advanced.html">Advanced Form</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-validation.html">Form Validation</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-pickers.html">Form Pickers</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-wizard.html">Form Wizard</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-mask.html">Form Masks</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-uploads.html">Multiple File Upload</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/form-xeditable.html">X-editable</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="has-submenu">--}}
                            {{--<a href="http://alpha.homedeliverynetwork.net/index.html#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> </a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/tables-basic.html">Basic Tables</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/tables-datatable.html">Data Table</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/tables-responsive.html">Responsive Table</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/tables-tablesaw.html">Tablesaw</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="has-submenu">--}}
                            {{--<a href="http://alpha.homedeliverynetwork.net/index.html#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-flot.html">Flot Chart</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-morris.html">Morris Chart</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-chartjs.html">Chartjs</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-peity.html">Peity Charts</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-chartist.html">Chartist Charts</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-c3.html">C3 Charts</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-sparkline.html">Sparkline charts</a></li>--}}
                                {{--<li><a href="http://alpha.homedeliverynetwork.net/chart-knob.html">Jquery Knob</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="has-submenu last-elements">--}}
                            {{--<a href="http://alpha.homedeliverynetwork.net/index.html#"><i class="zmdi zmdi-collection-item"></i> <span> Pages </span> </a>--}}
                            {{--<ul class="submenu megamenu">--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/calendar.html">Calendar</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-starter.html">Starter Page</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-login.html">Login</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-register.html">Register</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-recoverpw.html">Recover Password</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-lock-screen.html">Lock Screen</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-404.html">Error 404</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-500.html">Error 500</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-timeline.html">Timeline</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-invoice.html">Invoice</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-pricing.html">Pricing</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-gallery.html">Gallery</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-maintenance.html">Maintenance</a></li>--}}
                                        {{--<li><a href="http://alpha.homedeliverynetwork.net/pages-comingsoon.html">Coming Soon</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        @if(Auth::user()->is_super)
                        <li class="has-submenu last-elements">
                            <a href="{{ url('/users') }}">
                                <i class="zmdi zmdi-collection-item"></i> <span> Users </span>
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{ url('/users') }}">Manage Users</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @endif

                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->

@endsection

@section('basic-content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                        class="fa fa-cog"></i></span></button>
                        @yield('settings-menu')

                    </div>
                    <h4 class="page-title">@yield('page-title')</h4>
                </div>
            </div>

            @yield('content')

            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ date('Y') }} © {{ config('app.name') }}.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->


        </div> <!-- container -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <div class="nicescroll" tabindex="5001" style="overflow: hidden; outline: none;">
                <ul class="nav nav-tabs text-xs-center">
                    <li class="nav-item">
                        <a href="http://alpha.homedeliverynetwork.net/index.html#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://alpha.homedeliverynetwork.net/index.html#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                            Settings
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home-2">
                        <div class="timeline-2">
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 minutes ago</small>
                                    <p><strong><a href="http://alpha.homedeliverynetwork.net/index.html#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">30 minutes ago</small>
                                    <p><a href="http://alpha.homedeliverynetwork.net/index.html" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">59 minutes ago</small>
                                    <p><a href="http://alpha.homedeliverynetwork.net/index.html" class="text-info">Jessi</a> attended a meeting with<a href="http://alpha.homedeliverynetwork.net/index.html#" class="text-success">John Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">1 hour ago</small>
                                    <p><strong><a href="http://alpha.homedeliverynetwork.net/index.html#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">3 hours ago</small>
                                    <p><a href="http://alpha.homedeliverynetwork.net/index.html" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 hours ago</small>
                                    <p><a href="http://alpha.homedeliverynetwork.net/index.html" class="text-info">Jessi</a> attended a meeting with<a href="http://alpha.homedeliverynetwork.net/index.html#" class="text-success">John Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="messages-2">

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Notifications</h5>
                                <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked="" data-plugin="switchery" data-color="#64b0f2" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="border-color: rgb(100, 176, 242); box-shadow: rgb(100, 176, 242) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 176, 242);"><small style="left: 13px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">API Access</h5>
                                <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked="" data-plugin="switchery" data-color="#64b0f2" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="border-color: rgb(100, 176, 242); box-shadow: rgb(100, 176, 242) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 176, 242);"><small style="left: 13px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Auto Updates</h5>
                                <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked="" data-plugin="switchery" data-color="#64b0f2" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="border-color: rgb(100, 176, 242); box-shadow: rgb(100, 176, 242) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 176, 242);"><small style="left: 13px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Online Status</h5>
                                <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked="" data-plugin="switchery" data-color="#64b0f2" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="border-color: rgb(100, 176, 242); box-shadow: rgb(100, 176, 242) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 176, 242);"><small style="left: 13px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end nicescroll -->
            <div id="ascrail2001" class="nicescroll-rails" style="width: 8px; z-index: 9999; cursor: default; position: absolute; top: 0px; left: 232px; height: 470px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 286px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(152, 166, 173); background-clip: padding-box;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails" style="height: 8px; z-index: 9999; top: 462px; left: 0px; position: absolute; cursor: default; display: none; width: 232px; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 240px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(152, 166, 173); background-clip: padding-box;"></div></div></div>
        <!-- /Right-bar -->

    </div> <!-- End wrapper -->

@endsection