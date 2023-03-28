<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('adminDashboard')}}" >
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <!--- User sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="ion ion-ios-person"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.user')}}">All Users</a></li>
                        <li><a href="{{route('admin.user.create')}}">Create New User</a></li>
                    </ul>
                </li>
                </li>
                <!--- Page sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-google-pages"></i>
                        <span> Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.page')}}">All Pages</a></li>
                        <li><a href="{{route('admin.page.create')}}">Create New Page</a></li>
                    </ul>
                </li>
                <!--- Tax sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-funnel-dollar"></i>
                        <span> Taxes </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.tax')}}">All Taxes</a></li>
                        <li><a href="{{route('admin.tax.create')}}">Create New Tax</a></li>
                    </ul>
                </li>

                <!--- Shipping sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-shipping-fast"></i>
                        <span> Shippings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.shipping')}}">All Shippings</a></li>
                        <li><a href="{{route('admin.shipping.create')}}">Create New Shipping</a></li>
                    </ul>
                </li>

                <!--- Discount sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-ticket-percent"></i>
                        <span> Discounts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.discount')}}">All Discounts</a></li>
                        <li><a href="{{route('admin.discount.create')}}">Create New Discount</a></li>
                    </ul>
                </li>

                <!--- Category sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-list-alt"></i>
                        <span> Categories </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.category')}}">All Categories</a></li>
                        <li><a href="{{route('admin.category.create')}}">Create New Category</a></li>
                    </ul>
                </li>

                <!--- Product sidebar -->
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-shopping-basket"></i>
                        <span> Products </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.product')}}">All Products</a></li>
                        <li><a href="{{route('admin.product.create')}}">Create New Product</a></li>
                    </ul>
                </li>

                <li class="menu-title mt-2">Components</li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->