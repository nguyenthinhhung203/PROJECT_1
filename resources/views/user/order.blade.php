@include('user.header')
<div class="container">
    <h1 class="text-center">Danh sách đơn hàng</h1>
    <div class="row justify-content-center">
        <div class="col-md-10 mx-auto" style="padding-left: 200px"> <!-- Sử dụng lớp mx-auto để căn giữa -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Tên Người nhận hàng</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Số điện thoại</th>
                    <th>Thời gian đặt hàng</th>
                    <th>Trang Thai</th>
                    <th>Tùy chọn</th>
                    <th>Chi tiết </th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->orders_name}}</td>
                        <td>{{$order->orders_address}}</td>
                        <td>{{$order->orders_phone}}</td>
                        <td>{{$order->order_date}}</td>
                        <td>
                            @if($order->order_status == 0)
                                <span style="color: red;">{{ "Đã hủy" }}</span>
                            @elseif($order->order_status == 1)
                                <span style="color: #f3f34d;">{{ "Chờ Xác Nhận" }}</span>
                            @elseif($order->order_status == 2)
                                <span style="color: #2956f3;">{{ "Đang giao hàng" }}</span>
                            @elseif($order->order_status == 3)
                                <span style="color: #48f648;">{{ "Đã Nhận hàng" }}</span>
                            @endif
                        </td>
                        <td style="text-align: center;">
                            @if($order->order_status == 1)
                                <a href="{{route('order.cancel', ['id' => $order->order_id])}}" class="active" ui-toggle-class="" style="float: right;" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng không?');"><i class="fa fa-times text-danger text text-success text-active" style="font-size: 25px; color: red"></i></a>
                            @elseif($order->order_status == 2)
                                <a href="{{route('order.received', ['id' => $order->order_id])}}" class="active" ui-toggle-class="" style="float: left;"><i class="fa far fa-check text-success text-active" style="font-size: 25px"></i></a>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('user.Order_Detail', ['order_id' => $order->order_id])}}" class="active" ui-toggle-class="" style="float: left;"><i class="fa far fa-eye fa-spin  text-success text-active" style="font-size: 25px; color: black"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    // Bắt sự kiện khi người dùng nhấp vào liên kết hủy đơn hàng
    document.querySelectorAll('.cancel-order').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn chuyển hướng trang khi nhấp vào liên kết

            // Hiển thị hộp thoại xác nhận
            var confirmCancel = confirm("Bạn có chắc chắn muốn hủy đơn hàng không?");

            // Nếu người dùng xác nhận, chuyển hướng đến trang hủy đơn hàng
            if (confirmCancel) {
                window.location.href = event.target.getAttribute('href');
            }
        });
    });
</script>

<!-- ... (các mã HTML khác) ... -->

<script>
    // Bắt sự kiện khi người dùng nhấp vào liên kết hủy đơn hàng
    document.querySelectorAll('.cancel-order').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn chuyển hướng trang khi nhấp vào liên kết

            // Hiển thị hộp thoại xác nhận
            var confirmCancel = confirm("Bạn có chắc chắn muốn hủy đơn hàng không?");

            // Nếu người dùng xác nhận, chuyển hướng về trang trước đó
            if (confirmCancel) {
                // Thực hiện hủy đơn hàng ở đây (sử dụng event.target.getAttribute('href') để lấy đường dẫn hủy đơn hàng)

                // Sau khi hủy đơn hàng thành công, điều hướng về trang trước đó
                window.history.back();
            }
        });
    });
</script>

<!-- ... (các mã HTML khác) ... -->
@include('user.footer')
