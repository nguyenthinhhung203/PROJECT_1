@include('admin.header')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chi Tiết Đơn Hàng
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>

                            <th>Tên Sản Phẩm</th>
                            <th>Cấu Hình</th>
                            <th>Hình Ảnh</th>
                            <th>Số Lượng</th>
                            <th>Tổng Giá</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $orders as $orderDetail)
                            <tr>
                                <td>{{ $orderDetail->product_name }}</td>
                                <td>{{ $orderDetail->configuration_name }}</td>
                                <td><img src="{{ asset('admin/images/'. $orderDetail->image)}}" style="width: 180px;" alt=""></td>
                                <td>{{$orderDetail->amount}}</td>
                                <td>{{ number_format($orderDetail->unit_price, 0, '.', ',') }}VND</td>
                            </tr>
                        </tbody>
                        @endforeach
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
        </div>
    </section>
@include('admin.footer')
