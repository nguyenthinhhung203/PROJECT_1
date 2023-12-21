@include('user.header')
<style>
    /* CSS cho phần form */
    .form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form .form-group {
        margin-bottom: 15px;
    }

    .form input[type="text"], .form textarea, .form select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form select.payment, .form select#delivery {
        color: #555;
    }

    .form button {
        background: #fe980f;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .form button:hover {
        background: #fe980f;
    }


    .carousel-inner .item {
        text-align: center;
    }

    .carousel-inner .item h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .carousel-inner .item h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .carousel-inner .item p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .carousel-inner .item .btn-default {
        background: #fe980f;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .carousel-inner .item .btn-default:hover {
        background: #a08345;
    }

</style>
<form class="pay" action="{{route('order.store')}}" method="POST">
    <div class="form">
        @csrf
        <div class="form__title">
            <h1 style="text-align: center">Thông tin nhận hàng</h1>
        </div>
        <div class=" form-group pt-3">
            <input type="text" placeholder="Tên Người nhận" name="name_receive">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Địa chỉ người nhận" name="address_receive">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Số điện thoài người nhận" name="phone_receive">
        </div>
        <div class="form-group">
            <select name="payment" class="payment">
                <option disabled selected>Phương thức thanh toán</option>
                <option value="1">Bank</option>
                <option value="2">COD</option>
            </select>
        </div>
        <div class="form-group">
            <span style="color:red; margin-left:8px"></span>
        </div>
        <input type="hidden" name="total" value="">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <button type="submit" style="background-color: #FE980F" class="btn-submit">Thanh Toán</button>
            </div>
        </div>
    </div>
</form>
@include('user.footer')
