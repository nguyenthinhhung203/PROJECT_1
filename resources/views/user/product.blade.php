@include('user.header')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ route('user.category', $category) }}">{{$category->name}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            @foreach($brands as $brand)
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{ route('user.brand', $brand) }}"> <span class="pull-right"></span>{{$brand->name}}</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div><!--/brands_products-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('admin/images/'. $product->image) }}" alt="" />
                                        <p>{{$product -> name}}</p>
                                        <a href="{{route('user.product_detail')}}" class="btn btn-default add-to-cart"><i class=""></i>Chi Tiết Sản Phẩm</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach


                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{route('user.product_detail')}}" class="btn btn-default add-to-cart"><i class=""></i>Chi Tiết Sản Phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
@include('user.footer')
