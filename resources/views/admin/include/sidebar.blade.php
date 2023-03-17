
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
                <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span
                        class="right-nav-text">Dashboard</span></div>
                <div class="clearfix"></div>
            </a>

        </li>




        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Category_">
                <div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span
                        class="right-nav-text">Category</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Category_" class="collapse collapse-level-1 two-col-list">

                <li>
                    <a href="{{route('admin.category_list')}}">Category List</a>
                </li>





            </ul>
        </li>



        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sub_Category_">
                <div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span
                        class="right-nav-text">Sub Category</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sub_Category_" class="collapse collapse-level-1 two-col-list">

                <li>
                    <a href="{{route('admin.Sub_category_list')}}">Sub Category List</a>
                </li>
       
            </ul>
        </li>


        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr">
                <div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span
                        class="right-nav-text">Product</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">

                <li>
                    <a href="{{route('admin.product')}}">Product List</a>
                </li>
                <li>
                    <a href="{{route('admin.add_products')}}">Add Product</a>
                </li>
                <li>
                    <a href="{{route('admin.product_detail')}}">Product Detail</a>
                </li>

            </ul>
        </li>











        <li>
            <a href="{{route('admin.product_orders')}}">
                <div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span
                        class="right-nav-text">Orders</span></div>
                <div class="pull-right"><span class="label label-warning">new</span></div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.product_cart')}}">

                <div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span
                        class="right-nav-text">Cart</span></div>
                <div class="pull-right"><span class="label label-warning">new</span></div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.product_checkout')}}">
                <div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span
                        class="right-nav-text">Checkout</span></div>
                <div class="pull-right"><span class="label label-warning">new</span></div>
                <div class="clearfix"></div>
            </a>
        </li>










    </ul>
</div>
