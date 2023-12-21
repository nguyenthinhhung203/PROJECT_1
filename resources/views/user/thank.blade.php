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
                            <li><a href="{{route('user.login')}}"><i class="fa fa-lock"></i> Login</a></li>
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
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
<style>
    /* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    /* HTML5 display-role reset for older browsers */
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    body {
        line-height: 1;
    }

    ol,
    ul {
        list-style: none;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: "";
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    body {
        font-family: "Open Sans", sans-serif;
        background-color: #fff;
        font-size: 15px;
        line-height: 1.6;
    }

    .main {
        margin-top: 84px;
    }
    @media (max-width: 1023px) {
        .main {
            margin-top: 84px;
        }
    }
    @media (max-width: 767px) {
        .main {
            margin-top: 64px;
        }
    }

    .category-list {
        border: 1px solid #320bf7;
        border-radius: 12px;
        height: 100%;
    }
    .category-list h5 {
        text-align: center;
        color: #fa0707;
        font-size: 20px;
        font: 500px;
        text-transform: uppercase;
    }
    .category-list .list-group-item {
        border: none;
    }
    .category-list .list-group-item:hover a {
        color: #320bf7;
    }
    .category-list .list-group-item a {
        text-decoration: none;
        color: #000;
        font-size: 18px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }
    .category-list .list-group-item a i {
        margin-left: auto;
        font-size: 16px;
    }

    @media (max-width: 1023px) {
        .category-list {
            display: none;
        }
        .pt-mobile-12 {
            padding-top: 12px;
        }
        .mt-mobile-12 {
            margin-top: 12px;
        }
    }
    @media (max-width: 767px) {
        .pt-xs-12 {
            margin-top: 12px;
        }
    }
    .slider_qc {
        height: 100%;
    }
    .slider_qc div img {
        width: 100%;
        height: 212px;
        object-fit: cover;
    }

    .border-b-primary {
        border-bottom: 1px solid #320bf7;
    }

    #toTop {
        font-size: 12px;
        padding: 4px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: rgb(255, 255, 255);
        text-align: center;
        bottom: 60px;
        position: fixed;
        right: calc(50% - 620px);
        text-decoration: none;
        z-index: 100;
        background: rgba(215, 0, 24, 0.7);
        transition: opacity 0.5s ease;
        opacity: 0;
        cursor: pointer;
        display: none;
        border-radius: 8px;
    }
    #toTop i {
        font-size: 16px;
    }

    .breadcrumb_custom .breadcrumb-item a {
        text-decoration: none !important;
    }

    .btn {
        text-decoration: none;
        outline: none;
    }
    .btn-pay, .btn-add {
        width: 100%;
        border-radius: 10px;
        text-transform: uppercase;
    }
    .btn-pay {
        color: #fff !important;
        background-color: #fa0707;
    }
    .btn-pay p {
        text-transform: lowercase;
    }
    .btn-add {
        color: #fa0707 !important;
        border-color: #fa0707;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .btn-add i {
        font-size: 22px;
    }

    .img-qc {
        height: 430px;
    }
    .img-qc img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn.btn-primary {
        background-color: #320bf7;
    }

    .comment h1 {
        font-size: 24px;
        text-transform: uppercase;
    }
    .comment_list {
        width: 100%;
    }
    .comment_list li {
        width: 100%;
        list-style: none;
        border: 1px solid rgba(50, 11, 247, 0.3);
        padding: 10px;
        border-radius: 8px;
    }
    .comment_list li span {
        font-size: 18px;
    }
    .comment_list li span b {
        color: #ccc;
    }
    .comment_list li p i {
        color: #f7de03;
    }

    .form-group .payment {
        width: 100%;
        margin-left: 0;
    }
    .form-group textarea,
    .form-group input {
        width: 100%;
        outline: none;
        border: 1px solid #ccc;
        padding: 8px 18px;
        border-radius: 8px;
    }
    .form-group textarea:focus,
    .form-group input:focus {
        border: 1px solid #320bf7;
    }
    .form-group textarea {
        width: 100%;
    }
    .form-group select {
        border: 1px solid #ccc;
        padding: 8px 18px;
        border-radius: 8px;
        margin-left: 8px;
    }
    .form-group select:focus {
        border: 1px solid #320bf7;
    }

    .form-btn {
        text-align: right;
    }
    .form-btn button {
        min-width: 100px;
    }

    .btn-status {
        color: #fff;
        font-size: 12px;
        padding: 2px 6px;
        letter-spacing: 0.2px;
        display: inline-block;
        border-radius: 2px;
    }
    .btn-status--success {
        background-color: #320bf7;
    }
    .btn-status--pending {
        background-color: #f1536e;
    }
    .btn-status--close {
        background-color: #00c689;
    }

    #toast-message {
        position: fixed;
        top: 150px;
        right: 32px;
        z-index: 99;
    }

    .toast {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 6px;
        border-left: 4px solid;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.08);
        padding: 20px 0;
        margin: 0 auto;
        transition: all 0.5s ease;
    }
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(calc(100% + 32px));
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    @keyframes fadeOut {
        to {
            opacity: 0;
        }
    }
    .toast--success {
        border-color: #47d864;
    }
    .toast--success .toast__icon {
        color: #47d864;
    }
    .toast--info {
        border-color: #2f86eb;
    }
    .toast--info .toast__icon {
        color: #2f86eb;
    }
    .toast--waning {
        border-color: orange;
    }
    .toast--waning .toast__icon {
        color: orange;
    }
    .toast--error {
        border-color: red;
    }
    .toast--error .toast__icon {
        color: red;
    }
    .toast + .toast {
        margin-top: 24px;
    }
    .toast__icon {
        font-size: 24px;
    }
    .toast__close, .toast__icon {
        padding: 0 16px;
    }
    .toast__body {
        flex-grow: 1;
        max-width: 300px;
        min-width: 250px;
    }
    .toast__title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }
    .toast__msg {
        font-size: 14px;
        color: #888;
        line-height: 1.5;
        margin-top: 6px;
    }
    .toast__close {
        font-size: 20px;
        color: #999;
        cursor: pointer;
    }

    .toast:not(.showing):not(.show) {
        opacity: unset !important;
    }

    .header {
        background-color: #202067;
        color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 14px 0;
        z-index: 99;
    }
    .header_container {
        max-width: 1480px;
        margin: 0 auto;
        padding: 0 20px;
    }
    @media (max-width: 767px) {
        .header_container {
            padding: 0 !important;
        }
    }
    .header_logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: #fff !important;
    }
    .header_logo .logo_img {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
    }
    .header_logo .logo_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .header_logo p {
        text-transform: uppercase;
        font-size: 20px;
        flex: 1;
    }
    .header_btnCategory {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background-color: #1c1c5a;
        border-radius: 6px;
        padding: 10px 12px;
        cursor: pointer;
        position: relative;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    .header_btnCategory:hover {
        border: 1px solid #fff;
    }
    .header_btnCategory i {
        font-size: 20px;
    }
    .header_btnCategory:hover .menu-category {
        visibility: visible;
        opacity: 1;
        top: calc(100% + 30px);
    }
    .header_btnCategory .menu-category {
        position: absolute;
        top: calc(100% + 40px);
        left: 0;
        width: 250px;
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s ease;
    }
    .header_btnCategory .menu-category::before {
        content: "";
        position: absolute;
        top: -40px;
        left: 0;
        width: 100%;
        height: 40px;
        background-color: transparent;
    }
    .header_btnCategory .menu-category li {
        list-style: none;
    }
    .header_btnCategory .menu-category li a {
        text-decoration: none;
        color: #000;
        padding: 8px 0;
        display: block;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    .header_btnCategory .menu-category li a:hover {
        color: #320bf7;
    }
    .header_search {
        position: relative;
    }
    .header_search input {
        width: 100%;
        padding: 8px 20px;
        border-radius: 12px;
        border: none;
        outline: none;
    }
    .header_search button {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        padding: 0 12px 0 12px;
        border: none;
        outline: none;
        background-color: transparent;
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
    }
    .header_search i {
        z-index: 1;
        color: #000;
    }
    .header_menu {
        display: flex;
        justify-content: space-between;
    }
    .header_menu li {
        list-style: none;
        position: relative;
    }
    .header_menu li a {
        text-decoration: none;
        color: #fff;
        display: flex;
        gap: 10px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .header_menu li a i {
        font-size: 22px;
    }
    .header_menu li:hover ul {
        visibility: visible;
        opacity: 1;
        top: calc(100% + 18px);
    }
    .header_menu li ul {
        position: absolute;
        background-color: #fff;
        top: calc(100% + 22px);
        right: -50%;
        width: 185px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 10px;
        border-radius: 8px;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s ease;
    }
    .header_menu li ul:before {
        content: "";
        position: absolute;
        top: -18px;
        right: 0;
        width: 80%;
        height: 20px;
        background-color: transparent;
        z-index: 1;
    }
    .header_menu li ul li a {
        color: #000;
        display: block;
    }
    .header_menu li ul li a i {
        font-size: 14px;
        padding-left: 4px;
    }
    .header_menu li span {
        position: absolute;
        top: -7px;
        right: 10px;
        z-index: 99;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #fff;
        background-color: red;
        z-index: 1000;
    }
    .header .offCanvas_custom {
        display: none;
        color: #000;
    }
    .header .modal-backdrop {
        display: none;
    }
    .header .menuMobile {
        padding-left: 20px;
    }
    .header .menuMobile li {
        list-style: none;
    }
    .header .menuMobile li:nth-child(2):hover .sub_menuMobile {
        display: block;
    }
    .header .menuMobile li a {
        text-decoration: none;
        color: #000;
        font-size: 16px;
        padding: 6px 0;
        display: block;
    }
    .header .menuMobile li a i {
        margin-right: 8px;
    }
    .header .menuMobile .sub_menuMobile {
        padding-left: 16px;
        display: none;
    }
    .header .menuMobile .accordion-item {
        border: none;
    }
    .header .menuMobile .accordion-item button {
        outline: none;
    }
    .header .menuMobile_logo {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .header .menuMobile_logo img {
        width: 42px;
    }
    .header .menuMobile_logo p {
        font-size: 18px;
        text-transform: uppercase;
    }

    @media (max-width: 1023px) {
        .header_menu {
            display: none;
        }
        .header_btnCategory p {
            display: none;
        }
        .header_btnCategory .menu-category {
            display: none;
        }
        .offCanvas_custom {
            display: flex !important;
        }
        .modal-backdrop {
            display: block !important;
        }
    }
    @media (max-width: 767px) {
        .header_logo .logo_img {
            width: 42px;
        }
        .header_logo p {
            display: none;
        }
        .header_search input {
            padding: 4px 12px;
            font-size: 14px;
        }
        .header_btnCategory {
            padding: 4px 12px;
        }
    }
    .product-sale_container {
        background-color: #f5f5f5;
        padding: 8px;
    }
    .product-sale_title {
        text-transform: uppercase;
        text-align: right;
        font-size: 15px;
        line-height: 1.2;
        height: 40px;
    }
    .product-sale_desc {
        font-size: 14px;
        text-align: right;
    }
    .product-sale_price {
        font-size: 18px;
        font-weight: 800;
        color: #ed1a22;
        text-align: right;
    }
    .product-sale_slogan {
        text-align: center;
        text-transform: uppercase;
        font-weight: 900;
        font-size: 16px;
        letter-spacing: 0.2px;
        position: relative;
    }
    .product-sale_slogan::before {
        content: "";
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        height: 0.5px;
        width: 25%;
        background-color: #ed1a22;
    }
    .product-sale_slogan::after {
        content: "";
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        height: 0.5px;
        width: 25%;
        background-color: #ed1a22;
    }

    .lazy-component_top {
        align-items: center;
    }
    .lazy-component_title {
        font-size: 32px;
        font-weight: 500;
    }
    .lazy-component_list {
        display: flex;
        gap: 6px;
        justify-content: end;
        flex-wrap: wrap;
    }
    @media (max-width: 1023px) {
        .lazy-component_list {
            justify-content: start;
        }
    }
    .lazy-component_list li {
        list-style: none;
    }
    .lazy-component_list li a {
        text-transform: capitalize;
        color: #000;
        text-decoration: none;
        padding: 2px 8px;
        border-radius: 8px;
        display: block;
        background-color: rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    .lazy-component_list li a:hover {
        color: #320bf7;
    }
    .lazy-component_search {
        position: relative;
    }
    @media (max-width: 767px) {
        .lazy-component_search {
            display: none;
        }
    }
    .lazy-component_search input {
        width: 100%;
        border-radius: 8px;
        border: 1px solid #320bf7;
        padding: 4px 10px;
        outline: none;
    }
    .lazy-component_search button {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        border: none;
        background-color: transparent;
        background-color: #320bf7;
        height: 100%;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        padding: 0 16px;
    }
    .lazy-component_search button i {
        color: #fff;
    }

    .card_customer {
        margin-top: 16px;
        padding: 10px;
        border-color: #320bf7;
        border-radius: 12px;
        position: relative;
    }
    .card_customer .card-img-top {
        height: 120px;
        object-fit: contain;
    }
    .card_customer .card-body {
        padding: 8px 0 0 0;
    }
    .card_customer .card-title {
        font-weight: 500;
        font-size: 16px;
        line-height: 1.4;
        height: 42px;
        overflow: hidden;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }
    .card_customer .card-price {
        font-size: 14px;
        margin-bottom: 4px;
    }
    .card_customer .card-price span:first-child {
        color: #ed1a22;
        font-weight: 700;
    }
    .card_customer .card-price span:last-child {
        color: #ccc;
        text-decoration: line-through;
        font-weight: 500;
        margin-left: 2px;
    }
    .card_customer .card-desc {
        border-radius: 2px;
        background-color: #f3f4f6;
    }
    .card_customer .card-desc p {
        padding: 2px;
        height: 52px;
        overflow: hidden;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        font-size: 14px;
    }
    .card_customer .card-rating {
        margin-top: 10px;
        display: flex;
        height: 20px;
        margin-bottom: 30px;
    }
    .card_customer .card-rating i {
        color: #f59e0b;
    }
    .card_customer .card-heart {
        margin-top: 20px;
    }
    .card_customer .card-heart p {
        font-size: 15px;
        font-weight: 500;
        color: #777;
        position: relative;
        padding-right: 4px;
        display: flex;
        align-items: center;
        justify-content: end;
        gap: 4px;
    }
    .card_customer .card-heart p i {
        font-size: 18px;
        color: #ed1a22;
        cursor: pointer;
    }
    .card_customer .card-link {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .category-product_container ul {
        margin-top: 12px;
        display: flex;
        flex-wrap: wrap;
    }
    .category-product_container ul li a {
        display: flex;
        align-items: center;
        gap: 4px;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        height: 34px;
        justify-content: center;
        margin: 0 10px 10px 0;
        padding: 5px 10px;
        text-decoration: none;
        color: #000;
    }
    .category-product_container ul li a.active {
        border-color: #ed1a22;
        color: #ed1a22;
        background-color: #fef2f2;
    }
    .category-product_container ul li a i {
        font-size: 14px;
    }
    .category-product_container ul li a img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .category-product_class {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 4px;
    }
    .category-product_class li {
        width: 111px;
    }
    .category-product_class li:nth-child(1) a {
        background-image: url("../img/filter-cate-971.svg");
        background-color: rgb(255, 203, 143);
    }
    .category-product_class li:nth-child(2) a {
        background-image: url("../img/filter-2.svg");
        background-color: rgb(247, 119, 77);
    }
    .category-product_class li:nth-child(3) a {
        background-image: url("../img/filter-3.svg");
        background-color: rgb(255, 143, 143);
    }
    .category-product_class li:nth-child(4) a {
        background-image: url("../img/filter-4.svg");
        background-color: rgb(237, 85, 108);
    }
    .category-product_class li:nth-child(5) a {
        background-image: url("../img/filter-5.svg");
        background-color: rgb(255, 128, 232);
    }
    .category-product_class li:nth-child(6) a {
        background-image: url("../img/filter-6.svg");
        background-color: rgb(255, 158, 221);
    }
    .category-product_class li:nth-child(7) a {
        background-image: url("../img/filter-5.svg");
        background-color: rgb(255, 128, 232);
    }
    .category-product_class li:nth-child(8) a {
        background-image: url("../img/filter-3.svg");
        background-color: rgb(255, 143, 143);
    }
    .category-product_class li:nth-child(9) a {
        background-image: url("../img/filter-4.svg");
        background-color: rgb(237, 85, 108);
    }
    .category-product_class li:nth-child(10) a {
        background-image: url("../img/filter-5.svg");
        background-color: rgb(255, 128, 232);
    }
    .category-product_class li a {
        background-position: 100% 100%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 10px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.1), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
        display: block;
        min-height: 125px;
        overflow: hidden;
        position: relative;
        -webkit-text-decoration: none;
        text-decoration: none;
        width: 100%;
        margin-bottom: 0 !important;
    }
    .category-product_class li a span {
        position: absolute;
        top: 0;
        color: #fff;
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-top: 5px;
        max-width: 114px;
        padding: 0 5px;
        width: 100%;
        word-break: break-word;
        z-index: 1;
    }
    .category-product_title h5 {
        font-size: 18px;
        font-weight: 500;
    }

    .product-detail_container {
        padding: 20px;
        border: 1px solid rgba(50, 11, 247, 0.4);
        border-radius: 12px;
    }
    .product-detail_container img {
        width: 100%;
        display: block;
    }
    .product-detail_container .img-display {
        overflow: hidden;
    }
    .product-detail_container .img-showcase {
        display: flex;
        width: 100%;
        transition: all 0.5s ease;
    }
    .product-detail_container .img-showcase img {
        min-width: 100%;
        object-fit: cover;
    }
    .product-detail_container .img-select {
        display: flex;
        flex-wrap: wrap;
    }
    .product-detail_container .img-item_wrap {
        padding: 8px;
    }
    .product-detail_container .img-item {
        height: 80px;
    }
    .product-detail_container .img-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .product-detail_container .img-item:nth-child(1),
    .product-detail_container .img-item:nth-child(2),
    .product-detail_container .img-item:nth-child(3) {
        margin-right: 0;
    }
    .product-detail_container .img-item:hover {
        opacity: 0.8;
    }
    @media screen and (min-width: 992px) {
        .product-detail_container .product-imgs {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    }
    .product-detail_name {
        border-bottom: 1px solid #320bf7;
        margin-bottom: 16px;
    }
    .product-detail_name h5 {
        font-size: 24px;
        padding-bottom: 12px;
    }
    .product-detail_img {
        padding: 20px;
    }
    .product-detail_img-item {
        border: 1px solid #ccc;
        padding: 16px 20px;
        border-radius: 16px;
        cursor: pointer;
    }
    .product-detail_serial {
        font-size: 16px;
    }
    .product-detail_rating {
        border-left: 1px solid #000;
        border-right: 1px solid #000;
        display: inline-block;
        padding: 0 4px;
    }
    .product-detail_rating i {
        color: #f7de03;
    }
    .product-detail_comment {
        font-size: 18px;
        padding: 8px 0;
    }
    .product-detail_desc h5 {
        font-size: 22px;
        font-weight: 500;
    }
    .product-detail_desc p {
        font-weight: 500;
    }
    .product-detail_promotion {
        margin-top: 12px;
        border: 1px dashed #320bf7;
        padding: 0;
        border-radius: 12px;
        overflow: hidden;
    }
    .product-detail_promotion h5 {
        color: #320bf7;
        background-color: #e3e1f5;
        padding: 4px 30px;
    }
    .product-detail_promotion p {
        padding: 16px 30px;
    }
    .product-detail_price {
        background: linear-gradient(#ff66ff, #ffff00);
        display: inline-block;
        padding: 6px 14px;
        font-size: 18px;
        border-radius: 6px;
        font-weight: 700;
        color: #fff;
        border: 1px solid #000;
    }
    .product-detail_price.show-mobile {
        display: none;
    }
    @media (max-width: 1023px) {
        .product-detail_price {
            display: none;
        }
        .product-detail_price.show-mobile {
            display: inline-block;
        }
    }
    .product-detail_list-lazy {
        margin-top: 20px;
    }
    .product-detail_list-lazy ul {
        border-radius: 6px;
        overflow: hidden;
        border: 1px solid #fef2f2;
    }
    .product-detail_list-lazy ul h5 {
        text-align: center;
        background-color: #320bf7;
        color: #fff;
        padding: 4px 10px;
        font-size: 16px;
        font-weight: 600;
    }
    .product-detail_list-lazy ul li {
        list-style: circle;
        margin-left: 30px;
        padding: 0 20px 0 0;
    }
    .product-detail_list-lazy ul li:not(:first-child) {
        padding-top: 4px;
    }
    .product-detail_list-lazy ul li:last-child {
        padding-bottom: 20px;
    }

    .specification {
        border: 1px solid rgba(50, 11, 247, 0.4);
        border-radius: 8px;
        overflow: hidden;
        padding-bottom: 10px;
    }
    .specification h2 {
        font-size: 18px;
        font-weight: 700;
        padding: 10px;
    }
    .specification ul {
        border: 1px solid #ccc;
        margin: 0 10px;
        border-radius: 8px;
        overflow: hidden;
    }
    .specification ul li {
        list-style: none;
        display: flex;
        align-items: center;
        padding: 4px 10px;
    }
    .specification ul li + .specification ul li {
        margin-top: 10px;
    }
    .specification ul li:nth-of-type(odd) {
        background-color: #f2f2f2;
    }
    .specification ul li p {
        flex: 1;
    }

    .cart__title {
        text-align: center;
    }
    .cart__title h1 {
        color: #333333;
        font-family: Arial;
        font-size: 18px;
        font-weight: 500;
        line-height: 19.8px;
        margin: 10px 0px;
        text-align: center;
        text-transform: uppercase;
    }
    .cart_promotion {
        display: flex;
        gap: 10px;
    }
    @media (max-width: 1023px) {
        .cart_promotion {
            align-items: end;
        }
    }
    .cart_promotion-input label {
        display: inline-block;
        margin-right: 8px;
    }
    .cart_promotion-input input {
        width: auto;
        outline: none;
        border: 1px solid #ccc;
        padding: 6px 12px;
        transition: all 0.3s ease;
    }
    .cart_promotion-input input:focus {
        border: 1px solid #320bf7;
    }
    .cart_promotion-btn button {
        padding: 7px 12px;
        border: none;
        background-color: #320bf7;
        color: #fff;
    }
    .cart_promotion-error {
        color: #ea4242;
    }
    .cart__table {
        margin-top: 6px;
    }
    .cart__table .table_rp {
        width: 100%;
        overflow-x: auto;
    }
    .cart__table table {
        min-width: 900px;
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #000;
    }
    .cart__table table thead tr {
        color: #000;
    }
    .cart__table table thead tr th {
        font-weight: 700;
        text-transform: uppercase;
        border-bottom: 1px solid #000;
        text-align: center;
    }
    .cart__table table th,
    .cart__table table td {
        padding: 12px 10px;
        border-right: 1px solid #000;
    }
    .cart__table table tbody {
        background-color: #fff;
    }
    .cart__table table tbody tr:not(:last-child) {
        border-bottom: 1px solid #000;
    }
    .cart__table table td {
        vertical-align: middle;
    }
    .cart__table table td a {
        text-decoration: none;
        font-size: 18px;
        padding: 4px 12px;
        border-radius: 8px;
        background-color: #ea4242;
        color: #000;
    }
    .cart__table table td a.btn-update {
        background-color: #ccc;
        color: #fff;
        font-size: 22px;
        width: 40px;
        height: 40px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }
    .cart__table table td input {
        width: 80%;
        padding: 8px 4px 8px 10px;
        outline: none;
        border: 1px solid #ccc;
    }
    .cart__table table td .img {
        width: 100px;
        margin: 0 auto;
    }
    .cart__table table td .img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .cart__table .table__bottom {
        margin-top: 20px;
        margin-left: auto;
    }
    .cart__table .table__bottom .table__total {
        border: 1px solid #000;
        background-color: #fff;
        display: flex;
    }
    .cart__table .table__bottom .table__total .removePromotion {
        margin-right: 8px;
        background-color: #ea4242;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 20px;
        height: 20px;
        border-radius: 8px;
    }
    .cart__table .table__bottom .table__total .removePromotion i {
        font-size: 10px;
        color: #fff;
    }
    .cart__table .table__bottom .table__total p {
        padding: 14px;
        width: 50%;
    }
    .cart__table .table__bottom .table__total p:first-child {
        border-right: 1px solid #000;
    }
    .cart__table .table__bottom .table__total p:last-child {
        color: #320bf7;
        font-weight: 700;
        font-size: 16px;
        display: flex;
        justify-content: end;
        align-items: center;
    }
    .cart__table .table__bottom .table__pay {
        display: flex;
        justify-content: end;
        gap: 10px;
    }
    .cart__table .table__bottom .table__pay a,
    .cart__table .table__bottom .table__pay button {
        border: none;
        padding: 8px 14px;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        border-radius: 8px;
        border: 1px solid #000;
    }
    .cart__table .table__bottom .table__pay a {
        background-color: #ccc;
        color: #000;
    }
    .cart__table .table__bottom .table__pay button {
        background-color: #18f71d;
        min-width: 80px;
        font-weight: 600;
        font-size: 18px;
    }

    .pay__container {
        border: 1px solid #3ff55d;
        border-radius: 10px;
        padding: 0 20px;
    }
    @media (max-width: 1023px) {
        .pay__container {
            border: none;
        }
    }
    .pay .bl-pay {
        border-right: 1px solid #3ff55d;
    }
    @media (max-width: 1023px) {
        .pay .bl-pay {
            border-right: none;
        }
    }
    .pay .form {
        padding: 20px 0;
    }
    .pay .form__title {
        font-size: 24px;
        font-weight: 600;
    }
    .pay .form-group input {
        width: 100%;
        outline: none;
        border: 1px solid #ccc;
        padding: 8px 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    .pay .form-group input:focus {
        border-color: #320bf7;
    }
    .pay .form-group + .form-group {
        padding-top: 12px;
    }
    .pay__right {
        padding: 20px 0;
    }
    .pay__right h5 {
        font-size: 24px;
        font-weight: 600;
    }
    .pay__right p {
        font-size: 18px;
        line-height: 2.4;
        font-weight: 500;
        margin-top: 10px;
    }
    .pay__right span {
        color: #fa920b;
        font-size: 24px;
        margin-top: 12px;
        display: block;
    }
    .pay__right .pay__desc {
        text-align: right;
        font-size: 14px;
        margin-right: 40px;
    }
    .pay__container.thank {
        padding: 40px;
        background: #e4f1c9;
        border: 1px solid #a5bd71;
    }
    .pay__thank {
        margin-top: 20px;
        font-size: 16px;
        line-height: 24px;
        padding-right: 10%;
    }
    .pay .btn-submit {
        text-decoration: none;
        color: #fff;
        background-color: #ff9933;
        padding: 12px 40px;
        display: inline-block;
        font-size: 24px;
        border-radius: 10px;
        border: none;
    }

    .auth .login_container {
        border: 1px solid #320bf7;
        padding: 20px;
        border-radius: 10px;
    }
    @media (max-width: 767px) {
        .auth .login_container {
            border: none;
        }
    }
    .auth .form p {
        padding-left: 20px;
        color: #777;
    }
    .auth .form p a {
        color: #000;
    }
    .auth .form__title h1 {
        color: #320bf7;
        font-size: 40px;
        font-family: "Alkatra";
    }
    .auth .form__title p {
        color: #000;
        font-size: 16px;
        font-weight: 500;
    }
    .auth.contact .login_container {
        border: 1px solid rgba(126, 54, 225, 0.6);
        padding: 20px;
        border-radius: 0;
    }
    @media (max-width: 767px) {
        .auth.contact .login_container {
            border: none;
        }
    }
    .auth.contact .form__title {
        text-align: center;
    }
    .auth.contact .form__btn,
    .auth.contact .form-group {
        padding-left: 0;
    }
    .auth.contact .form-group input {
        border: 3px solid #3ff55d;
    }
    .auth.contact .form__btn {
        text-align: center;
    }
    .auth.contact .form__btn button {
        width: auto;
        padding: 8px 20px;
        background-color: #525252;
        color: #fff;
        border: 3px solid #7e36e1;
        border-radius: 16px;
    }
    .auth.register .form__btn,
    .auth.register .form-group {
        padding-left: 0;
    }
    .auth.lookup .lookup_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .auth .form__btn,
    .auth .form-group {
        padding-left: 20px;
    }
    @media (max-width: 767px) {
        .auth .form__btn,
        .auth .form-group {
            padding-left: 0;
        }
    }
    .auth .form__btn button {
        width: 100%;
        border: none;
        background-color: #320bf7;
        color: #fff;
        padding: 8px 0;
        border-radius: 8px;
        text-transform: uppercase;
    }
    .auth .form-group {
        margin-bottom: 12px;
    }
    .auth .form-group input {
        padding: 8px 12px;
        width: 100%;
        outline: none;
        border-radius: 8px;
        border: 1px solid #3ff55d;
    }
    .auth .form-group textarea {
        padding: 8px 12px;
        width: 100%;
        outline: none;
        border-radius: 8px;
        border: 1px solid #3ff55d;
    }
    .auth .login__img {
        height: 400px;
    }
    @media (max-width: 767px) {
        .auth .login__img {
            display: none;
        }
    }
    .auth .login__img img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .bill {
        padding: 20px 45px;
        background-color: #fff;
    }
    .bill__header {
        margin: 26px 0;
    }
    .bill__header p {
        font-size: 24px;
        font-weight: 700;
        line-height: 28.8px;
        margin: 24px 0px;
        text-align: right;
    }
    .bill__content {
        border-top: 1px solid #d2d2dc;
        border-bottom: 1px solid #d2d2dc;
        padding: 58px 0;
        overflow-x: auto;
    }
    .bill__content .bill__main {
        min-width: 800px;
    }
    .bill__content table {
        width: 100%;
        border-collapse: collapse;
    }
    .bill__content table thead {
        background-color: #08113b;
    }
    .bill__content table thead tr > th {
        padding: 20px 15px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
    }
    .bill__content table tbody tr > td {
        padding: 15px;
        border-top: 1px solid #f3f3f3;
    }
    .bill__date {
        margin: 48px 0;
    }
    .bill__info {
        display: flex;
        justify-content: space-between;
    }
    .bill__info .customer__info .customer__position {
        font-size: 14px;
        line-height: 24px;
        font-weight: 700;
    }
    .bill__info .customer__info .customer__name {
        margin-top: 4px;
    }
    .bill__info .bill__receive {
        text-align: right;
    }
    .bill__info .bill__receive .receive__title {
        font-weight: 700;
        margin-bottom: 4px;
    }
    .bill__bottom {
        margin-top: 48px;
        position: relative;
    }
    .bill__bottom p {
        text-align: right;
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
    }
    .bill__bottom .bill__action {
        position: absolute;
        right: 20px;
        bottom: -44px;
    }
    .bill__footer {
        display: flex;
        margin-top: 48px;
        justify-content: end;
        gap: 0 8px;
    }

    .footer {
        padding-top: 40px;
    }
    .footer .benefit {
        border-top: 1px solid #320bf7;
        border-bottom: 1px solid #320bf7;
        padding: 40px 0;
    }
    .footer .benefit_container {
        gap: 20px 0;
        align-items: center;
    }
    @media (max-width: 1023px) {
        .footer .benefit {
            padding: 20px 0;
        }
    }
    @media (max-width: 767px) {
        .footer .benefit {
            padding: 10;
        }
        .footer .benefit_item {
            justify-content: center;
        }
    }
    .footer .benefit_item {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .footer .benefit_item i {
        font-size: 40px;
        color: #ed1a22;
    }
    .footer .benefit_content p:first-child {
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.2px;
        font-size: 18px;
    }
    .footer .benefit_content p:last-child {
        color: #c7cdcc;
    }
    .footer_main {
        border-bottom: 1px solid #320bf7;
        padding: 10px 0;
    }
    .footer_main .payment_title h5 {
        font-size: 18px;
        font-weight: 600;
    }
    .footer_main .payment_list {
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
        gap: 0 6px;
    }
    .footer_main .payment_list li a {
        text-decoration: none;
        display: block;
    }
    .footer_main .payment_list li a img {
        border: 1px solid #ccc;
    }
    .footer_main .authority {
        padding-top: 14px;
    }
    .footer_main .authority_item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 14px;
        padding: 10px;
        color: #fff;
        text-decoration: none;
    }
    .footer_main .authority_item p {
        font-weight: 600;
    }
    .footer_main .authority_item p b {
        font-size: 14px;
        font-weight: 400;
    }
    .footer_main .authority_item-1 {
        background-color: #ed1a22;
    }
    .footer_main .authority_item-2 {
        background-color: #334168;
    }
    .footer_main .contact {
        padding-top: 14px;
    }
    .footer_main .contact ul li {
        list-style-type: none;
    }
    .footer_main .contact ul li a {
        color: #050508;
        font-size: 16px;
        text-decoration: none;
        display: block;
        padding: 4px 0;
    }
    .footer_main .contact ul li a i {
        margin-right: 8px;
    }
    .footer_main .social-network ul {
        display: flex;
        gap: 10px;
    }
    .footer_main .social-network ul li {
        list-style-type: none;
    }
    .footer_main .social-network ul li a {
        text-decoration: none;
        display: block;
        width: 100%;
    }
    .footer_main .social-network ul li a img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .footer .instruct {
        margin: 10px 0;
    }
    .footer .instruct ul h5 {
        font-size: 24px;
        font-weight: 500;
        padding: 8px 0;
        margin: 12px 0;
        border-bottom: 3px solid #ed1a22;
        display: inline-block;
    }
    .footer .instruct ul li {
        list-style-type: none;
    }
    .footer .instruct ul li:hover a {
        color: #320bf7;
    }
    .footer .instruct ul li a {
        text-decoration: none;
        color: #000;
        font-size: 16px;
        display: block;
        padding: 4px 0;
        transition: all 0.3s ease;
    }
    .footer .instruct ul li a img {
        width: auto;
        height: 80px;
        object-fit: cover;
    }

    /*# sourceMappingURL=main.css.map */

</style>
<div class="pay pt-2">
    <div class="container">
        <div class="pay__container thank">
            <h1 class="pay__thank">
                Đặt hàng thành công !!<br />
                <br />
                Cảm ơn quý khách đã đặt hàng! chúng tôi sẽ sớm liên lạc với bạn trong thời gian sớm nhất
            </h1>
            <div class="pay__right">
                <div class="pay__logo">
                    <img src="./public/img/logo.png" alt="">
                </div>
                <p class="">DKT được thành lập với niềm đam mê và khát vọng thành công trong lĩnh vực Thương mại điện tử.</p>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        123 ABC, Ba Đình, Hà Nội
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        Hotline: 097 1539 681
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        your-email@gmail.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('load', function() {
        const delivery = document.querySelector('#delivery');
        const transportFee = document.querySelector('#transport-fee');
        const transportFeeInput = document.querySelector('#transport-fee-input');
        const total = document.querySelector('#total');
        const showTotal = document.querySelector('#show-total');
        if (delivery) {
            delivery.onchange = function(event) {
                if (event.target.value === 'Giao hàng tiết kiệm') {
                    transportFee.innerHTML = ' 20.000';
                    const result = total.textContent - 20000;
                    showTotal.innerHTML = (result).toLocaleString('en-US') + 'đ';
                    transportFeeInput.value = 20000;
                } else if (event.target.value === 'Giao hàng bình thường') {
                    transportFee.innerHTML = ' 50.000';
                    const result = total.textContent - 50000;
                    showTotal.innerHTML = (result).toLocaleString('en-US') + 'đ';
                    transportFeeInput.value = 50000;
                } else if (event.target.value === 'Giao hàng nhanh') {
                    transportFee.innerHTML = ' 100.000';
                    const result = total.textContent - 100000;
                    showTotal.innerHTML = (result).toLocaleString('en-US') + 'đ';
                    transportFeeInput.value = 100000;
                } else if (event.target.value === 'Giao hàng hỏa tốc') {
                    transportFee.innerHTML = ' 200.000';
                    const result = total.textContent - 200000;
                    showTotal.innerHTML = (result).toLocaleString('en-US') + 'đ';
                    transportFeeInput.value = 200000;
                }
            }
        }

    })
</script>
@include('user.footer')
