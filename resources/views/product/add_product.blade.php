@include('admin.header')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Tên Sản Phẩm</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="name" minlength="2" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cimage" class="control-label col-lg-3">Image</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cimage" type="file" name="image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="description" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Danh Mục</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="category_id">
                                                <option selected>-- Chọn Danh Mục --</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Thuơng Hiệu</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="brand_id" id="brand_id">
                                                <option selected>-- Chọn Thương Hiệu --</option>
                                                @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
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
