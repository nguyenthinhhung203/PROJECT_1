@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa Admin
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="{{ route('admin.update', $admin) }}" novalidate="novalidate">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Họ Và Tên</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="name" value="{{ $admin->name }}" minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">E-Mail</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="email" value="{{ $admin->email }}" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cpassword" type="password" value="{{ $admin->password }}" name="password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="caddress" type="text" name="address" value="{{ $admin->address }}">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Phone Number</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cphone_number" type="number" value="{{ $admin->phone_number }}" name="phone_number" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Sửa</button>
                                            <button class="btn btn-default" type="button">Hủy</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
    </section>
@include('admin.footer')
