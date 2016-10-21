<div class="navbar-custom active">
    <div class="container">
        <div id="navigation" class="active">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                @if(!Auth::user()->isCustomer())
                    <li class="active">
                        <a href="{{ url('/dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
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
                    @endif
                @endif

            </ul>
            <!-- End navigation menu  -->
        </div>
    </div>
</div>