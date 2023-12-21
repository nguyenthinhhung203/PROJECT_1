<!DOCTYPE html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}" type="text/css"/>
    <link href="{{ asset('admin/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('admin/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('admin/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('admin/js/raphael-min.js')}}"></script>
    <script src="{{asset('admin/js/morris.js')}}"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{ asset('admin/index') }}" class="logo">
                <h3 style="color: lightskyblue">
                    Shop
                </h3>
                <h2>LapTopHL</h2>
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/2.png">
                        <span class="username">Setting</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{route('admin.logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation"tabindex="5000" style="overflow: hidden; outline: none;">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{ asset('admin/index') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Quản Lý Danh Mục</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('category.add_category') }}">Thêm Danh Mục</a></li>
                            <li><a href="{{ asset('category/show_category') }}">Xem Danh Mục</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-star"></i>
                            <span>Quản Lý Thương Hiệu</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('brand.add_brand') }}">Thêm Thương Hiệu</a></li>
                            <li><a href="{{ asset('brand/show_brand') }}">Xem Thương Hiệu</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-product-hunt"></i>
                            <span>Quản Lý Sản Phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ asset('product/add_product') }}">Thêm Sản Phẩm</a></li>
                            <li><a href="{{ asset('product/show_product') }}">Xem Sản Phẩm</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-first-order"></i>
                            <span>Quản Lý Đơn Hàng</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ asset('order/show_order') }}">Xem Đơn hàng</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bug"></i>
                            <span>Quản Lý Admin</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('admin.add_admin') }}">Thêm Admin</a></li>
                            <li><a href="{{ asset('admin/show_admin') }}">Xem Admin</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span>Quản Lý Customer</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ asset('customer/show_customer') }}">Xem Customer</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-credit-card"></i>
                            <span>Phương Thức Thanh Toán</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ route('payment_method.add_payment_method') }}">Thêm Phương Thức</a></li>
                            <li><a href="{{ asset('payment_method/show_payment_method') }}">Xem Phương Thức</a></li>
                        </ul>
                    </li>
                </ul>            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <section>

    </section>
</section>

