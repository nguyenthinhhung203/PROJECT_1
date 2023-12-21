@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bảng Thông Số Của Cấu Hình
                </div>
                <div class="table-responsive">
                    <div class="input-group col">
                        <h3 style="margin-left: 15px">Tên Cấu Hình: {{ $configuration->name }}</h3>
                    </div>
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên Thông Số</th>
                            <th>Giá Trị Thông Số</th>
                            <th style="width:40px;">Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($specificaltions as $specificaltion)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{$specificaltion->name}}</td>
                                <td>{{$specificaltion->value}}</td>
                                <td style="width: 130px; margin-left: 12px;">
                                    <a class="active edit-config-btn" data-toggle="modal" data-target="#editConfigModal"
                                       data-id="{{ $specificaltion->id }}"
                                       data-name="{{$specificaltion->name}}"
                                       data-value="{{$specificaltion->value}}">
                                        <i class="fa far fa-edit text-success text-active" style="font-size: 25px"></i>
                                    </a>
                                    <form method="post" action="{{route('specificaltion.destroy', $specificaltion)}}" style="float: right;">
                                        @method('DELETE')
                                        @csrf
                                        <button style="margin-right: 15px;"><i class="fa fa-times text-danger text"></i></button>
                                    </form>
                                </td>
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
    {{--sửa thông số--}}
    <div class="modal fade" id="editConfigModal" tabindex="-1" role="dialog" aria-labelledby="editConfigModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editConfigModalLabel">Sửa Thông Số</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your edit form fields here -->
                    <form action="{{route('specificaltion.update', [':id'])}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên Thông Số:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$specificaltion->name}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá Trị Thông Số:</label>
                            <input type="text" class="form-control" id="value" name="value" value="{{$specificaltion->value}}">
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
    <script>
        $('#editConfigModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Get the ID from the data-id attribute
            var name = button.data('name');
            var value = button.data('value');
            var form = $(this).find('form'); // Get the form element inside the modal
            var action = form.attr('action'); // Get the form's current action attribute
            // Update the form's action to include the specific ID
            form.attr('action', action.replace(':id', id));

            // Populate form fields with data
            $(this).find('#name').val(name);
            $(this).find('#value').val(value);
        });
    </script>
@include('admin.footer')
