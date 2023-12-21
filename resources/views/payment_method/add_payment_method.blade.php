@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Phương Thức Thanh Toán
                        </header>
                        <div class="panel-body">
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
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="{{ route('payment_method.store') }}" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Tên Phương Thức</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="name" minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Thêm</button>
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
