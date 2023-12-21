@include('admin.header')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Xem Sản Phẩm
                </div>
                <div class="row" style="margin-top: 25px; margin-left: 15px">
                    <div class="col-md-1">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button" data-toggle="modal" data-target="#addConfigModal">Thêm Cấu Hình!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên Sản Phẩm</th>
                            <th>Image</th>
                            <th>Mô tả</th>
                            <th>Tổng số lượng</th>
                            <th>Danh Mục</th>
                            <th>Thương Hiệu</th>
                            <th style="width:30px;">Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(session('error'))
                            <div id="error-message" class="alert alert-danger text-center" role="alert">
                                <strong>{{ session('error') }}</strong>
                            </div>
                            <script>
                                // Sử dụng JavaScript để ẩn thông báo sau 5 giây
                                setTimeout(function() {
                                    var errorMessage = document.getElementById('error-message');
                                    if (errorMessage) {
                                        errorMessage.style.display = 'none';
                                    }
                                }, 3000); // 5000 milliseconds = 5 giây
                            </script>
                        @endif

                        @foreach($products as $product)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{$product->name}}</td>
                                <td><img src="{{ asset('admin/images/'. $product->image)}}" style="width: 180px;" alt=""></td>
                                <td>{{$product->description}}</td>
                                <td>{{ $product->total_amount  }}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td style="width: 130px; margin-left: 12px;">
                                    <a href="{{ route('product.check_configuration', ['product' => $product]) }}" class="active" ui-toggle-class="" style="float: right;">
                                        <i class="fa far fa-info-circle text-success text-active" style="font-size: 25px; color: #37b8e7"></i>
                                    </a>
                                    <div class="text-danger" style="float: right; margin-right: 10px;"></div>
                                    <a href="{{ route('product.edit_product', $product->id) }}" class="active" ui-toggle-class="" style="float: left;"><i class="fa far fa-edit text-success text-active" style="font-size: 25px"></i></a>
                                    <form method="post" action="{{ route('product.destroy', $product) }}" style="float: right;">
                                        @method('DELETE')
                                        @csrf
                                        <button style="margin-right: 15px;"><i class="fa fa-times text-danger text"></i></button>
                                    </form>
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
        </div>
    </section>
{{--    thêm cấu hình--}}
    <div class="modal fade" id="addConfigModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Cấu Hình</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('config.store', ['product' => $product]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="productSelection">Chọn Sản Phẩm:</label>
                            <select class="form-control" id="productSelection" name="product_id" required>
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="configName">Tên Cấu Hình:</label>
                            <input type="text" class="form-control" id="configName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="configPrice">Giá Cấu Hình:</label>
                            <input type="text" class="form-control" id="configPrice" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="configPrice">Số Lương Cấu Hình:</label>
                            <input type="text" class="form-control" id="configAmount" name="amount" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('admin.footer')
