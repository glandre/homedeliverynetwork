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