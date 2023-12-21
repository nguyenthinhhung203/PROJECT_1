<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCartRequest;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Configuration;
use App\Models\Payment_Method;
use App\Models\Product;
use App\Models\Product_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function addToCart(Request $request, $product_id, $configuration_id){
        if (Auth::guard('customer')->check()){
            $product = Product::find($product_id);
            $configuration = Configuration::find($configuration_id);

            $productDetail = Product_Detail::where('configuration_id', $configuration_id)->first();

            $cart = $request->session()->get('cart', []);

            $existingCartItem = null;
            foreach ($cart as $key => $cartItem) {
                if ($cartItem['product']->id == $product_id && $cartItem['configuration']->id == $configuration_id) {
                    $existingCartItem = $key;
                    break;
                }
            }

            if ($existingCartItem !== null) {
                // Item already exists in the cart, so update the quantity directly.
                $cart[$existingCartItem]['quantity']++;
            } else {
                // Nếu sản phẩm và cấu hình chưa tồn tại, thêm vào giỏ hàng
                $cartItem = [
                    'product' => $product,
                    'configuration' => $configuration,
                    'quantity' => 1,
                    'price' => $configuration->price,
                    'image' => $product->image,
                    'product_detail_id' => $productDetail->id,
                ];

                $cart[] = $cartItem;
            }

            // Update the session cart with the modified cart array
            $request->session()->put('cart', $cart);

            return redirect()->back();
        } else {
            return redirect()->route('user.login');
        }
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequestRequest  $request
     * @param  \App\Models\Cart  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request) {
        $cart = session()->get('cart');
        foreach ($request->quantity as $productId => $quantity) {
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] = $quantity;
                $cart[$productId]['total_price'] = $cart[$productId]['product']->price * $quantity;
            }
        }
        session()->put('cart', $cart);
        session()->flash('success', 'Cập Nhật Thành Công ');
        session()->flash('cart_updated', true);
        return redirect()->route('user.cart');
    }



    public function viewCart(Request $request)
    {
        if (Auth::guard('customer')->check()) {
            // Lấy giỏ hàng từ session
            $cart = $request->session()->get('cart', []);


            // Tính tổng giá trị đơn hàng
            $total = 0;
            foreach ($cart as $cartItem) {
                $total += $cartItem['price'] * $cartItem['quantity'];
            }

            return view('user.cart', compact('cart', 'total'));
        } else {
            // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('user.login');
        }
//            $customers = Auth::guard('customer')->id();

//        user id se duoc hieu la 1 id cua user chu khong phai customer
//            $cart = Cart::where(['user_id' => $customers])->get();
//
//            $total = 0;
//            foreach ($cart as $cartItem) {
//                $total += $cartItem->total;
//            }
//
//            return view('user.cart', [
//                'cart' => $cart,
//                'total' => $total
//            ]);
//        }
        }


//    public function store ()
//    {
//        $customers = Auth::guard('customer')->id();
//        $check_exists = Cart::where(['configuration_id' => $_POST['c'], 'user_id' => $customers])->get();
//        if (count($check_exists) > 0) {
//            $check_exists = $check_exists->get(0);
//            $request = [
//                'amount' => $check_exists->amount + 1,
//                'total' => $check_exists->total + $check_exists->price,
//            ];
//            $check_exists->update($request);
//        } else {
//            $configuration = Configuration::where('id',$_POST['c'])->get()->get(0);
//            $request = [
//                'name' => $_POST['a'],
//                'image' => $_POST['b'],
//                'configuration' => $configuration->name,
//                'configuration_id' => $configuration->id,
//                'price' => $configuration->price,
//                'amount' => 1,
//                'total' => $configuration->price,
//                'user_id' => $customers
//            ];
//            Cart::create($request);
//        }
//




    public function removeCart(Request $request, $index)
    {
        // Kiểm tra xem session giỏ hàng đã tồn tại chưa
        if ($request->session()->has('cart')) {
            // Lấy giỏ hàng từ session
            $cart = $request->session()->get('cart');

            // Kiểm tra xem chỉ số ($index) có tồn tại trong mảng giỏ hàng không
            if (array_key_exists($index, $cart)) {
                // Xóa sản phẩm khỏi giỏ hàng dựa trên chỉ số
                unset($cart[$index]);

                // Cập nhật session giỏ hàng với giá trị mới
                $request->session()->put('cart', $cart);
            }
        }

        // Điều hướng trở lại trang giỏ hàng sau khi xóa sản phẩm
        return redirect()->back();
    }

    public function allRemoveCart(Request $request){
        session()->forget('cart');
        $request->session()->forget('cart');
        return redirect()->back();
    }
}
