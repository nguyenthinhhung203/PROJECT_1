@include('admin.header')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản Lý Đơn Hàng
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>

                            <th>Khách Hàng</th>
                            <th>Ngày Tạo Đơn</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Trạng Thái</th>
                            <th>Phương Thức Thanh toán</th>
                            <th style="width:30px;">Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->address }}</td>
                                <td>
                                    @if($order->order_status == 0)
                                        <span style="color: red;">{{ "Đã hủy" }}</span>
                                    @elseif($order->order_status == 1)
                                        <span style="color: #f3f34d;">{{ "Chờ Xác Nhận" }}</span>
                                    @elseif($order->order_status == 2)
                                        <span style="color: #2956f3;">{{ "Đã Duyệt Đơn Hàng" }}</span>
                                    @elseif($order->order_status == 3)
                                        <span style="color: #48f648;">{{ "Đã Nhận hàng" }}</span>
                                    @endif

                                </td>
                                <td>{{ $order->payment_method }}</td>
                                <td style="width: 130px; margin-left: 12px;">
                                    <a href="{{ route('order_detail.order_detail', ['orderId' => $order->order_id]) }}" class="active" ui-toggle-class="" style="float: left;">
                                        <i class="fa far fa-question-circle text-success text-active" style="font-size: 25px; color: #e7e437"></i>
                                    </a>
                                    @if($order->order_status == 1)
                                    <a href="{{ route('order.thumbs', ['order' => $order->order_id]) }}" class="active" style="float: left; padding-left: 25px">
                                        <i class="fa far fa-thumbs-up text-success text-active" style="font-size: 25px"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
            <script>
                var confirmed = {{ $order->order_status == 2 ? 'true' : 'false' }};
            </script>
        </div>
    </section>
@include('admin.footer')



