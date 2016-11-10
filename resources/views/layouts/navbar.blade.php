<div class="navbar-custom active">
    <div class="container">
        <div id="navigation" class="active">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                @if(!Auth::user()->isCustomer())
                    <li class="has-submenu last-elements">
                        <a href="{{ url('/dashboard') }}">
                            <i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{ url('/store') }}">Store</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->isSuper())
                    <li class="has-submenu last-elements">
                        <a href="{{ url('/users') }}">
                            <i class="zmdi zmdi-collection-item"></i> <span> Users </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{ url('/users') }}">Manage Users</a></li>
                                    <li><a href="{{ url('/subscriptions') }}">Subscriptions</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-submenu last-elements">
                        <a href="{{ url('/products') }}">
                            <i class="zmdi zmdi-shopping-basket"></i> <span> Products </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{ url('/products/inventory') }}">Inventory</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ url('/product-types') }}">Product Types</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ url('/vendors') }}">Product Vendors</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu last-elements">
                        <a href="{{ url('/orders') }}">
                            <i class="zmdi zmdi-shopping-basket"></i> <span> Orders </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{ url('/orders-new') }}">New Orders</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ url('/orders-paid') }}">Paid Orders</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ url('/orders-complete') }}">Completed Orders</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                @endif

            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>
   <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Welcome back.</li>

                            <li class="has_sub">
                                <a href="index.html" class="waves-effect"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Staff</a></li>
                                    <li><a href="ui-cards.html">Customers</a></li>
                                    <li><a href="ui-dropdowns.html">Pending users</a></li>
                                    
                                </ul>
                            </li>
 <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-shopping-basket"></i><span> Products </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-materialdesign.html">All Products</a></li>
                                    <li><a href="icons-ionicons.html">Add New Product</a></li>
                                    <li><a href="icons-fontawesome.html">Product Categories</a></li>
                                    <li><a href="icons-themify.html">Vendors</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-local-shipping"></i><span>Orders</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-materialdesign.html">New Orders</a></li>
                                    <li><a href="icons-ionicons.html">Paid Orders</a></li>
                                    <li><a href="icons-fontawesome.html">Complete Orders</a></li>
                                
                                </ul>
                            </li>
                            
      <li class="has_sub">
                                <a href="#" class="waves-effect"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Profile </span> </a>
                            </li>

                                <li class="has_sub">
                                <a href="#" class="waves-effect"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Settings </span> </a>
                            </li>
                                 <li class="has_sub">
                                <a href="#" class="waves-effect"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Support </span> </a>
                            </li>

    <li class="has_sub">
                                <a href="#" class="waves-effect"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Logout </span> </a>
                            </li>


                      

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                                    <li><a href="chart-peity.html">Peity Charts</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-c3.html">C3 Charts</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline charts</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="label label-success label-pill pull-xs-right">13</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
                                <ul class="list-unstyled">
                                	<li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span>    </a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->