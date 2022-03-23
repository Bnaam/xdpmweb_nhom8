<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>


<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo" style="background-color: #8c8c80; ">
            <a href="#">
                <img src="{{asset('admin/assets/images/HNR.jpeg')}}" class="logo-icon" alt="logo icon"
                    style="height: 50px;width: 150px">

            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">


            <li class="sidebar-header">QUẢN LÝ</li>
            <li>
                <a href="{{route('users.index')}}">
                    <i class="fa fa-users"></i> <span>Người dùng</span>
                </a>
            </li>

            <li>
                <a href="{{route('orders.index')}}">
                    <i class="fa fa-building-o"></i> <span>Đơn hàng</span>
                </a>
            </li>

            <li>
                <a href="{{route('products.index')}}">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Sản phẩm</span>
                </a>
            </li>

            <li>
                <a href="{{route('productcatalog.index')}}">
                    <i class="fa fa-th"></i> <span>Danh mục sản phẩm</span>
                </a>
            </li>

            <li>
                <a href="{{route('posts.index')}}">
                    <i class="fa  fa-list-alt"></i> <span>Bài viết</span>
                </a>
            </li>

            <li>
                <a href="{{route('postcatalog.index')}}">
                    <i class="zmdi zmdi-grid"></i> <span>Danh mục bài viết</span>
                </a>
            </li>

        </ul>

    </div>