<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.admin_dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                </li>




                <li class="mt-2 menu-title">Menu</li>


                <li>
                    <a href="#users" data-bs-toggle="collapse">
                        <!-- <i class="mdi mdi-cart-outline"></i> -->
                        <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
                        <span> User Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.user') }}">All Users</a>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#category" data-bs-toggle="collapse">
                        <!-- <i class="mdi mdi-cart-outline"></i> -->
                        <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
                        <span> Category Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="category">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">All Category</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#payment_method" data-bs-toggle="collapse">
                        <!-- <i class="mdi mdi-cart-outline"></i> -->
                        <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
                        <span> Payment Method Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="payment_method">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.payment_method') }}">All Payment Method</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#product" data-bs-toggle="collapse">
                        <!-- <i class="mdi mdi-cart-outline"></i> -->
                        <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
                        <span> Product Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.product') }}">All Product</a>
                            </li>
                            <li>
                                {{-- {{ route('add.product') }} --}}
                                <a href="{{ route('add.product') }}">Add Product</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
