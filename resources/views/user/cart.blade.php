<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ShopHL</title>
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('user/js/html5shiv.js')}}"></script>
    <script src="{{asset('user/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<header id="header"><!--header-->
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{route('user.index')}}" class="logo">
                            <h3 style="color: lightskyblue">
                                ShopLapTopHL
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('user.order')}}"><i class="fa fa-user"></i> Me</a></li>
                            <li><a href="{{route('user.cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
                            @if(Auth::guard('customer')->check())
                                <li><a href="{{route('user.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            @else
                                <li><a href="{{route('user.login')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('user.index')}}" class="active">Trang Chủ</a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
<form id="cart_items" method="post" action="{{route('cart.update')}}">
    <div class="container">
        <div class="table-responsive cart_info" style="margin: 0px">
            @if(session()->has('/'))
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session()->get('success') }}',
                        showConfirmButton: false,
                        timer: 2000 // Close the alert after 3 seconds
                    });
                </script>
                {{ session()->forget('cart_updated') }} <!-- Clear the session variable -->
            @endif
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu" style="margin-right: 0px;margin-left: 35px;">
                    <td class="image">Ảnh </td>
                    <td class="name" style="padding-left: 40px; text-align: center">Sản Phẩm</td>
                    <td class="description">Cấu hình </td>
                    <td class="price" style="text-align: center">Giá</td>
                    <td class="quantity" style="text-align: center">Số Lượng</td>
                    <td class="total" style="text-align: center">Tổng Giá</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $key => $cartItem)
                <tr>
                    <td class="cart_product" style="margin-left: 0px">
                        <a href=""><img src="{{ asset('admin/images/'. $cartItem['product']->image) }}" alt="" style="width: 90px; height: 90px;"></a>
                    </td>
                    <td class="cart_name" style="text-align: center">
                        <h5><a href="">{{ $cartItem['product']->name }}</a></h5>
                    </td>
                    <td class="cart_description" style="text-align: center">
                        <h5><a href="">{{ $cartItem['configuration']->name }}</a></h5>
                    </td>
                    <td class="cart_price">
                        <p>{{ number_format($cartItem['price'], 0, ',', '.') }} VND</p>
                    </td>

                    <td class="cart_quantity">
                        <div class="cart_quantity_button ">
                            <input class="cart_quantity_input" id="quantity" type="number" name="quantity[{{ $key }}]" min="1" style="width: 100px; text-align: center" value="{{ $cartItem['quantity'] }}" autocomplete="off" size="2">
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">{{ number_format($cartItem['quantity'] * $cartItem['price'], 0, ',', '.') }} VND</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{ route('user.removeCart', ['index' => $key]) }}" onclick="return confirmDelete();"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a class="btn btn-default update" href="{{ route('user.allRemoveCart') }}" style="float: right;" onclick="return confirmDeleteAll();">Xóa toàn bộ giỏ hàng</a>
        <div class="row" >
        <div class="col-sm-5" style="margin-top: 50px">
            <div class="total_area">
                <ul style="padding: 0px">
                    <li style="padding: 0px">
{{--                        <div class="form-group">--}}
{{--                            <select name="payment" class="payment">--}}
{{--                                <option disabled selected>Phương thức thanh toán</option>--}}
{{--                                <option value="Giao hàng nhanh">T</option>--}}
{{--                                <option value="Giao hàng nhanh">Bank</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                    </li>
                    <li>Total <span>{{ number_format($total, 0, ',', '.') }} VND</span></li>
                    <form action="{{ route('cart.update') }}" method="post">
                        @csrf
                        @method('PUT')
                        <button name="update" class="btn btn-default update" href="" style="margin-left: 0px">Cập Nhật Giỏ Hàng</button>
                    </form>

                    <a class="btn btn-default check_out" href="{{route('user.infor')}}">Xác Nhận</a>
                </ul>
            </div>
        </div>
    </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <script>
        function confirmDelete() {
            var result = confirm(" Bạn có chắc chắn muốn xóa sản phẩm này không??");
            return result;
        }
    </script>


    <script>
        function confirmDeleteAll() {
            var result = confirm("Bạn có chắc chắn muốn xóa tất cả sản phẩm không?");
            return result;
        }
    </script>


</form> <!--/#cart_items-->
