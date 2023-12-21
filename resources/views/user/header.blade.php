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
{{--                <div class="col-sm-3">--}}
{{--                    <div class="search_box pull-right">--}}
{{--                        <input type="text" placeholder="Search"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">

                            <div class="col-sm-6">
                                <img src="{{ asset('user/images/home/20_Sep8cb52c67fef81d09a427a24e865707d1.jpg') }}" class="girl img-responsive" alt="" />
                                <img src="{{ asset('user/images/home/pricing.png') }}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <img src="{{ asset('user/images/home/20_Sepe1db25b037b1c17231ff5f63c4122724.jpg') }}" class="girl img-responsive" alt="" />
                                <img src="{{ asset('user/images/home/pricing.png') }}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <img src="{{ asset('user/images/home/20_Sep8cb52c67fef81d09a427a24e865707d1.jpg') }}" class="girl img-responsive" alt="" />
                                <img src="{{ asset('user/images/home/pricing.png') }}"  class="pricing" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
