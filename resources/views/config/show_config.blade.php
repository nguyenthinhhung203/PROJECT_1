@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bảng Cấu Hình Của Sản Phẩm
                </div>
                <div class="row" style="margin-top: 25px; margin-left: 15px">
                    <div class="col-md-1">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button" data-toggle="modal" data-target="#addConfigModal">Thêm Thông Số!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="input-group col">
                    <h3 style="margin-left: 15px">Tên sản phẩm: {{ $product->name }}</h3>
                    </div>
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Name</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th style="width:40px;">Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($configurations as $configuration)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{ $configuration->name }}</td>
                                <td>{{ number_format($configuration->price, 0, ',', '.') }}VND</td>
                                <td>{{$configuration->amount}}</td>
                                <td style="width: 130px; margin-left: 12px;">
                                    <a href="{{ route('config.specificaltion', ['configuration' => $configuration]) }}" class="active" style="float: right;"><i class="fa far fa-info-circle text-success text-active" style="font-size: 25px; color: #37b8e7"></i></a>
                                    <a class="active edit-config-btn" data-toggle="modal" data-target="#editConfigModal"
                                       data-id="{{ $configuration->id }}"
                                       data-name="{{ $configuration->name }}"
                                       data-price="{{ $configuration->price }}"
                                       data-amount="{{ $configuration->amount }}">
                                        <i class="fa far fa-edit text-success text-active" style="font-size: 25px"></i>
                                    </a>
                                    <form method="post" action="{{route('config.destroy', $configuration)}}" style="float: right;">
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
    {{--sửa cấu hình--}}
    <div class="modal fade" id="editConfigModal" tabindex="-1" role="dialog" aria-labelledby="editConfigModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editConfigModalLabel">Sửa Cấu Hình</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your edit form fields here -->
                    <form action="{{ route('config.update', $configuration->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên Cấu Hình:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $configuration->name }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá Cấu Hình:</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $configuration->price }}">
                        </div>
                        <div class="form-group">
                            <label for="amount">Số Lượng Cấu Hình:</label>
                            <input type="text" class="form-control" id="amount" name="amount" value="{{ $configuration->amount }}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--    thêm thông số--}}
    <div class="modal fade" id="addConfigModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- Modal content goes here -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Thông Số</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal content goes here -->
                    <form method="post" action="{{ route('specificaltion.store', ['configuration' => $configuration]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="configurationSelection">Chọn Cấu Hình:</label>
                            <select class="form-control" id="configurationSelection" name="configuration_id" required>
                                @foreach($configurations as $configuration)
                                    <option value="{{ $configuration->id }}">{{ $configuration->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" >
                            <label for="configName">Tên Thông Số:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="configPrice">Giá Trị Thông Số:</label>
                            <input type="text" class="form-control" id="value" name="value" required>
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
    <script>
        $('.edit-config-btn').click(function () {
            // Lấy dữ liệu từ thuộc tính data
            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            var amount = $(this).data('amount');

            // Đổ dữ liệu vào các trường của biểu mẫu
            $('#name').val(name);
            $('#price').val(price);
            $('#amount').val(amount);

            // // Thay đổi action của biểu mẫu để đảm bảo nó gửi dữ liệu cho cấu hình cụ thể
            var form = $('#editConfigModal').find('form');
            form.attr('action', '/ShopLapTopHL5/ShopLapTopHL1/public/config/show_config/' + id); // Đặt URL cụ thể cho cấu hình cần chỉnh sửa

            // Mở modal
            $('#editConfigModal').modal('show');
        });
    </script>
@include('admin.footer')
