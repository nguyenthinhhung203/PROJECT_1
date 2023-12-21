@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa Danh Mục Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="{{ route('category.update', $category) }}" novalidate="novalidate">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Tên Danh Mục</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="name" value="{{ $category->name}}" minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Cập nhật</button>
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
