@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Xem Phương Thức Thanh Toán
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-3" style="text-align: left">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm Kiếm!</button>
          </span>
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
                            <th>Name</th>
                            <th style="width:30px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payment_methods as $payment_method)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{ $payment_method->name }}</td>
                                <td style="width: 95px;">
                                    <a href="{{ route('payment_method.edit_payment_method', $payment_method) }}" class="active" ui-toggle-class="" style="float: left;"><i class="fa far fa-edit text-success text-active" style="font-size: 25px"></i></a>
                                    <form method="post" action="{{route('payment_method.destroy', $payment_method)}}" style="float: right;">
                                        @method('DELETE')
                                        @csrf
                                        <button><i class="fa fa-times text-danger text"></i></button>
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
@include('admin.footer')
