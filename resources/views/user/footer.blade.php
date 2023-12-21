<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
    </div>

</footer><!--/Footer-->



<script src="{{asset('user/js/jquery.js')}}"></script>
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('user/js/price-range.js')}}"></script>
<script src="{{asset('user/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('user/js/main.js')}}"></script>
<script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     // Lấy tất cả các liên kết cấu hình
    //     const configurationLinks = document.querySelectorAll(".configuration-link");
    //
    //     // Xử lý sự kiện khi một liên kết cấu hình được bấm
    //     configurationLinks.forEach((link) => {
    //         link.addEventListener("click", function (event) {
    //             event.preventDefault(); // Ngăn chặn trình duyệt chuyển hướng
    //
    //             // Lấy thông tin cấu hình từ data-attribute
    //             const configurationData = JSON.parse(link.getAttribute("data-configuration"));
    //             const configurationId = configurationData.id; // Đảm bảo rằng bạn có ID của cấu hình
    //             const productId = configurationData.product_id; // Đảm bảo rằng bạn có ID của sản phẩm
    //
    //             // Tạo URL dựa trên thông tin cấu hình và chuyển hướng đến trang sản phẩm
    //             const productDetailUrl = /realProject2/public/user/productDetail/${productId}/${configurationId};
    //             window.location.href = productDetailUrl;
    //         });
    //     });
    // });
</script>
</body>
</html>
