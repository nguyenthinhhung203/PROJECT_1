@include('user.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
    }

    tr.hidden {
        display: none;
    }
</style>
<section>
    <input type="hidden" id="_token" value="{{ csrf_token() }}">
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
                    </div>

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

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{asset('user/images/home/25_Sepf8e82c5e7bf7ee63e25c6fe69d12a886.jpg')}}" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img class="image" src="{{ asset('admin/images/'. $product->image) }}" style="width: 300px; height: 300px"  alt="" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2 class="name">{{$product -> name}}</h2>
                            <span>
                                <span class="price">{{number_format($configurations->get(0)->price, 0, ',', '.')}} VND</span>
                                <span>Trạng thái : </span><span class="amount">@if($configurations->get(0)->amount > 0)
                                        {{ "Còn hàng" }} @else {{"Hết hàng"}} @endif</span>
{{--                                @if($configurations->first())--}}
                                <button type="button" class="btn btn-fefault cart">
                                   <a id="add-to-cart-link" class="fa fa-shopping-cart" data-product_id="{{$product->id}}">Thêm Giỏ Hàng</a>
                                </button>
{{--                                @endif--}}
                            </span>
                            <p><b>Brand:</b> {{$pro_brand}}</p>
                            @for($i = 0; $i < count($configurations); $i++)
                                <button value="config1" data-id="{{$configurations->get($i)->id}}" class="config {{($i==0?"config_active":"")}}" data-amount="@if($configurations->get($i)->amount > 0)
                                    {{ "Còn hàng" }} @else {{"Hết hàng"}}
                                @endif"
                                        data-price="{{ number_format($configurations->get($i)->price, 0, ',', '.') }} VND" >{{$configurations->get($i)->name}}
                                </button>
                            @endfor
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab" >Thông Số Cấu Hình</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <table action="#">
                                    <table id="myTable">
                                        <tr>
                                            <th>Tên thông số kĩ thuật</th>
                                            <th>Giá trị thông số kĩ thuật</th>
                                        </tr>
                                        <tbody class="detail_spec">
                                            @foreach($specificaltions as $specificaltion)
                                                <tr>
                                                    <td>{{ $specificaltion->name }}</td>
                                                    <td>{{ $specificaltion->value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </table>

                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->
            </div>
        </div>
    </div>
</section>
<script>
    // Add a click event listener to the "Thêm Giỏ Hàng" button
    document.getElementById('add-to-cart-link').addEventListener('click', function(event) {
        // Prevent the default behavior of the anchor tag
        event.preventDefault();

        // Get the product ID from the data attribute
        var productId = this.getAttribute('data-product_id');

        // Perform the logic to add the product to the cart here
        // ...

        // Show SweetAlert2 notification
        Swal.fire({
            icon: 'success',
            title: 'Đã Thêm Vào Giỏ Hàng!',
            showConfirmButton: false,
            timer: 1500 // Automatically close the alert after 1.5 seconds
        });
    });
</script>
@include('user.footer')
