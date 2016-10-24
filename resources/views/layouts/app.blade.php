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
                                <a href="{{{ url('/') }}}"><i class="fa fa-search"></i></a>
                            </form>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                               href="{{{ url('/') }}}#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                @if(\App\Order::countNew() > 0)
                                    <span class="noti-icon-badge"></span>
                                @endif
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

                        {{--<li class="nav-item dropdown notification-list">--}}
                            {{--<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"--}}
                               {{--href="{{{ url('/ }}}#" role="button" aria-haspopup="false" aria-expanded="false">--}}
                                {{--<i class="zmdi zmdi-email noti-icon"></i>--}}
                                {{--<span class="noti-icon-badge"></span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg"--}}
                                 {{--aria-labelledby="Preview">--}}
                                {{--<!-- item-->--}}
                                {{--<div class="dropdown-item noti-title bg-success">--}}
                                    {{--<h5><small><span class="label label-danger pull-xs-right">7</span>Messages</small></h5>--}}
                                {{--</div>--}}

                                {{--<!-- item-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                    {{--<div class="notify-icon bg-faded">--}}
                                        {{--<img src="/images/avatar-2.jpg" alt="img" class="img-circle img-fluid">--}}
                                    {{--</div>--}}
                                    {{--<p class="notify-details">--}}
                                        {{--<b>Robert Taylor</b>--}}
                                        {{--<span>New tasks needs to be done</span>--}}
                                        {{--<small class="text-muted">1min ago</small>--}}
                                    {{--</p>--}}
                                {{--</a>--}}

                                {{--<!-- item-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                    {{--<div class="notify-icon bg-faded">--}}
                                        {{--<img src="/images/avatar-3.jpg" alt="img" class="img-circle img-fluid">--}}
                                    {{--</div>--}}
                                    {{--<p class="notify-details">--}}
                                        {{--<b>Carlos Crouch</b>--}}
                                        {{--<span>New tasks needs to be done</span>--}}
                                        {{--<small class="text-muted">1min ago</small>--}}
                                    {{--</p>--}}
                                {{--</a>--}}

                                {{--<!-- item-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                    {{--<div class="notify-icon bg-faded">--}}
                                        {{--<img src="/images/avatar-4.jpg" alt="img" class="img-circle img-fluid">--}}
                                    {{--</div>--}}
                                    {{--<p class="notify-details">--}}
                                        {{--<b>Robert Taylor</b>--}}
                                        {{--<span>New tasks needs to be done</span>--}}
                                        {{--<small class="text-muted">1min ago</small>--}}
                                    {{--</p>--}}
                                {{--</a>--}}

                                {{--<!-- All-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item notify-all">--}}
                                    {{--View All--}}
                                {{--</a>--}}

                            {{--</div>--}}
                        {{--</li>--}}

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown"
                               href="{{{ url('/') }}}#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{{ Auth::user()->pictureUrl() }}}" alt="user" class="img-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome {{Auth::user()->name}}</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="{{ url('/user/profile') }}"
                                   class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('/user/settings') }}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('/user/referral') }}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>My Referral Code</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item"
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


        @include('layouts.navbar')
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
                                data-toggle="dropdown" aria-expanded="false">Actions <span class="m-l-5"><i
                                        class="fa fa-cog"></i></span></button>
                        @yield('settings-menu')

                    </div>
                    <h4 class="page-title">@yield('page-title')</h4>
                </div>
            </div>

            @include('layouts.messages')

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
                        <a href="{{{ url('/') }}}#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{{ url('/') }}}#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
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
                                    <p><strong><a href="{{{ url('/') }}}#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">30 minutes ago</small>
                                    <p><a href="{{{ url('/') }}}" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">59 minutes ago</small>
                                    <p><a href="{{{ url('/') }}}" class="text-info">Jessi</a> attended a meeting with<a href="{{{ url('/') }}}#" class="text-success">John Doe</a>.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">1 hour ago</small>
                                    <p><strong><a href="{{{ url('/') }}}#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">3 hours ago</small>
                                    <p><a href="{{{ url('/') }}}" class="text-info">Lorem</a> commented your post.</p>
                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 hours ago</small>
                                    <p><a href="{{{ url('/') }}}" class="text-info">Jessi</a> attended a meeting with<a href="{{{ url('/') }}}#" class="text-success">John Doe</a>.</p>
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