@include('user.header')
<div class="container mt-5">
    <h1 class="text-center mb-4">Chi tiết đơn hàng</h1>
    <div class="row justify-content-center" style="margin-left: 200px">
        <div class="col-md-10">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Cấu Hình</th>
                    <th>Số Lượng</th>
                    <th>Giá tiền</th>
                    <th>Tổng Giá</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $totalPrice = 0;
                @endphp

                @foreach($orderDetails as $orderDetail)
                    <tr>
                        <td>{{ $orderDetail->product_name }}</td>
                        <td><img src="{{ asset('admin/images/'. $orderDetail->image)}}" style="width: 100px;" alt=""></td>
                        <td>{{ $orderDetail->configuration_name }}</td>
                        <td>{{ $orderDetail->amount }}</td>
                        <td>{{ number_format($orderDetail->price, 0, ',', '.') }} VND</td>
                        <td>{{ number_format($orderDetail->price * $orderDetail->amount, 0, ',', '.') }} VND</td>
                    </tr>
                    @php
                        $totalPrice += $orderDetail->price * $orderDetail->amount;
                    @endphp
                @endforeach

                <tr>
                    <td colspan="5" class="text-right"><strong>Tổng cộng:</strong></td>
                    <td><strong>{{ number_format($totalPrice, 0, ',', '.') }} VND</strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('user.footer')
