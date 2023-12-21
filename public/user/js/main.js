/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};

/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
    $(".config").click(function (){
        $(".config").removeClass("config_active");
        $(this).addClass("config_active");
        var id = $(this).attr("data-id");
        $.ajax({
            url: "/ShopLapTopHL5/ShopLapTopHL1/public/detail-config/" + id,
            method: "GET",
            dataType: "JSON",
            success: function (result) {
                var html = "";
                $.each(result, function (index, value) {
                    html += `<tr><td>` + value.name + `</td><td>` + value.value + `</td></tr>`;
                });
                console.log(html);
                $(".detail_spec").html(html);
            }
        });
        var p = $(this).attr("data-price");
        $(".price").html(p);
        $(".amount").html($(this).attr("data-amount"));
    });

    $("#add-to-cart-link").click(function (){ // B1 : Lấy dữ liệu từ product_detail
        var a = $(".name").html(),               //Để là html vì nọi nó theo class
            b = $(".image").attr("src"),         //Để là attr viết tắt attributes vì trong view nó có dạng là attributes
            c = $(".config_active").attr("data-id"),
            d = $(".price").html(),
            e = $(this).attr("data-product_id"),
            _token = $('input#_token').val();
        $.ajax({ // B2:  Đẩy dữ liệu sang cart
            url: "/ShopLapTopHL5/ShopLapTopHL1/public/user/addCart/" + e + "/" + c ,
            method: "GET",
            dataType: "JSON",       //Bộ trưởng bộ ngoại giao giữa các ngôn ngữ khác nhau
        })
    });
});

// B3 : Insent và thưcj hiện câu sql
// B4 : Trả ra dữ liệu nếu cần
