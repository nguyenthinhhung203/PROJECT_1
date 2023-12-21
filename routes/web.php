<?php
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('user/index', function () {
    $brands = Brand::all();// Lấy dữ liệu all bảng Brand
    $categories = Category::all(); //Lấy dữ liệu all bảng Category
//    dd($categories);
    $products = Product::all(); // Lấy all dữ liệu từ bảng Product
    return view('user.index', [
        'brands' => $brands,
        'categories' => $categories,
        'products' => $products
    ]);
}) ->name('user.index');

Route::get('user/product', function () {
    return view('user.product');
})->name('user.product');

Route::get('user/{product}/product_detail', [\App\Http\Controllers\ProductDetailController::class, 'UserProductDetail'])->name('user.product_detail');
Route::get('detail-config/{configuration}', [\App\Http\Controllers\ConfigurationController::class, 'detail'])->name('config.detail');
Route::get('user/{category}/category', [\App\Http\Controllers\CategoryController::class, 'UserCategory'])->name('user.category');
Route::get('user/{brand}/brand', [\App\Http\Controllers\BrandController::class, 'UserBrand'])->name('user.brand');
Route::get('user/{order_id}/UserOrderDetail', [\App\Http\Controllers\OrderDetailController::class, 'UserOrderDetail'])->name('user.Order_Detail');



//Route::get('user/cart', function () {return view('user.cart');})->name('user.cart');
Route::get('user/cartUser', [\App\Http\Controllers\CartController::class, 'viewCart'])->name('user.cart')->middleware('middlewareCustomer');
Route::get('user/addCart/{product_id}/{configuration_id}', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('user.addtocart');
Route::get('user/allRemoveCart', [\App\Http\Controllers\CartController::class, 'allRemoveCart'])->name('user.allRemoveCart');
Route::get('user/{index}/RemoveCart', [\App\Http\Controllers\CartController::class, 'removeCart'])->name('user.removeCart');
Route::put('user/update', [\App\Http\Controllers\CartController::class, 'update'])->name('cart.update');

//Route::post('add_cart', [\App\Http\Controllers\CartController::class, 'store']);


Route::get('user/login', [\App\Http\Controllers\CustomerController::class, 'show'])->name('user.login');
Route::post('user/register', [\App\Http\Controllers\CustomerController::class, 'store'])->name('user.register');
Route::post('user/loginProcess', [\App\Http\Controllers\CustomerController::class, 'loginProcess'])->name('user.loginProcess');
Route::get('user/logout', [\App\Http\Controllers\CustomerController::class, 'logout'])->name('user.logout');
Route::get('user/OrderUser', [\App\Http\Controllers\OrderController::class, 'show'])->name('user.order')->middleware('middlewareCustomer');
//Route::get('user/order', function () {return view('user.order');}) ->name('user.order');

Route::get('user/thank', function () {return view('user.thank');}) ->name('user.thank');
Route::get('user/infor', function () {return view('user.infor');}) ->name('user.infor');




Route::get('admin/index', [\App\Http\Controllers\AdminController::class, 'show_index'])->name('admin.index')->middleware('middlewareAdmin');
Route::get('admin/header', function () {return view('admin.header');});
Route::get('admin/footer', function () {return view('admin.footer');});

//category
Route::middleware('middlewareAdmin')->prefix('/category')->group(function (){
    Route::get('/show_category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.show_category');
    Route::get('/add_categories', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.add_category');
    Route::post('/add_categories', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/{categories}/edit_categories',[\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit_category');
    Route::put('/{categories}/edit_categories', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{categories}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');

});

//brand
Route::middleware('middlewareAdmin')->prefix('/brand')->group(function (){
    Route::get('/show_brand', [\App\Http\Controllers\BrandController::class, 'index'])->name('brand.show_brand');
    Route::get('/add_brands', [\App\Http\Controllers\BrandController::class, 'create'])->name('brand.add_brand');
    Route::post('/add_brands', [\App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
    Route::get('/{brands}/edit_brands',[\App\Http\Controllers\BrandController::class, 'edit'])->name('brand.edit_brand');
    Route::put('/{brands}/edit_brands', [\App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');
    Route::delete('/{brands}', [\App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.destroy');
});

//admin
Route::middleware('middlewareAdmin')->prefix('/admin')->group(function (){
    Route::get('/show_admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.show_admin');
    Route::get('/add_admins', [\App\Http\Controllers\AdminController::class, 'create'])->name('admin.add_admin');
    Route::post('/add_admins', [\App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('/{admins}/edit_admins',[\App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit_admin');
    Route::put('/{admins}/edit_admins', [\App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/{admins}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
});

//login
Route::get('/admin/login', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin.login');
Route::post('/admin/loginprocess', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('admin.loginProcess');
Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

//customer
Route::middleware('middlewareAdmin')->prefix('/customer')->group(function (){
    Route::get('/show_customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.show_customer');
});

//payment method
Route::middleware('middlewareAdmin')->prefix('/payment_method')->group(function (){
    Route::get('/show_payment_method', [\App\Http\Controllers\PaymentMethodController::class, 'index'])->name('payment_method.show_payment_method');
    Route::get('/add_payment_methods', [\App\Http\Controllers\PaymentMethodController::class, 'create'])->name('payment_method.add_payment_method');
    Route::post('/add_payment_methods', [\App\Http\Controllers\PaymentMethodController::class, 'store'])->name('payment_method.store');
    Route::get('/{payment_Methods}/edit_payment_methods',[\App\Http\Controllers\PaymentMethodController::class, 'edit'])->name('payment_method.edit_payment_method');
    Route::put('/{payment_Methods}/edit_payment_methods', [\App\Http\Controllers\PaymentMethodController::class, 'update'])->name('payment_method.update');
    Route::delete('/{payment_Methods}', [\App\Http\Controllers\PaymentMethodController::class, 'destroy'])->name('payment_method.destroy');
});

//product
Route::middleware('middlewareAdmin')->prefix('/product')->group(function (){
    Route::get('/show_product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.show_product');
    Route::get('/add_product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.add_product');
    Route::post('/add_product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/{products}/edit_product', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit_product');
    Route::put('/{products}/edit_product', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/{products}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/{product}/config',[\App\Http\Controllers\ProductController::class, 'showConfig'])->name('product.config');
    Route::get('/product/check-configuration/{product}',[\App\Http\Controllers\ProductController::class,'check_configuration' ])->name('product.check_configuration');

});

//config
Route::middleware('middlewareAdmin')->prefix('/config')->group(function (){
    Route::post('/show_product', [\App\Http\Controllers\ConfigurationController::class, 'store'])->name('config.store');
    Route::put('/show_config/{configuration}', [\App\Http\Controllers\ConfigurationController::class, 'update'])->name('config.update');
    Route::delete('/{configuration}', [\App\Http\Controllers\ConfigurationController::class, 'destroy'])->name('config.destroy');
    Route::get('/{configuration}/specificaltion',[\App\Http\Controllers\ConfigurationController::class, 'showSpecificaltion'])->name('config.specificaltion');

});

//specificaltion
Route::middleware('middlewareAdmin')->prefix('/specificaltion')->group(function () {
    Route::post('/show_specificaltion', [\App\Http\Controllers\SpecificaltionController::class, 'store'])->name('specificaltion.store');
    Route::put('/{specificaltion}/show_specificaltion', [\App\Http\Controllers\SpecificaltionController::class, 'update'])->name('specificaltion.update');
    Route::delete('/{specificaltion}', [\App\Http\Controllers\SpecificaltionController::class, 'destroy'])->name('specificaltion.destroy');
});

//order
Route::middleware('middlewareAdmin')->prefix('/order')->group(function () {
    Route::get('/show_order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order.show_order');
    Route::get('/{order}/thumbs', [\App\Http\Controllers\OrderController::class, 'thumbs'])->name('order.thumbs');
//    {{ route('order.thumbs', ['order' => $order->order_id]) }}
    Route::post('/order', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
    Route::get('/received/{id}', [\App\Http\Controllers\OrderController::class, 'received'])->name('order.received');
    Route::get('/cancel/{id}', [\App\Http\Controllers\OrderController::class, 'cancel'])->name('order.cancel');
});

//order_detail
Route::middleware('middlewareAdmin')->prefix('/order_detail')->group(function () {
    Route::get('/order_detail/{orderId}', [\App\Http\Controllers\OrderDetailController::class, 'index'])->name('order_detail.order_detail');
});



//UserProduct
Route:: prefix('/product')->group(function (){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'UserProduct'])->name('user.product');
});

//login
Route::post('/login', [\App\Http\Controllers\UserLoginController::class, 'store'])->name('login.store');
