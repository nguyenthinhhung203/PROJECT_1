<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order_Detail;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')
            ->join('payment_methods', 'orders.payment_method_id', '=', 'payment_methods.id')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select(
                'orders.id as order_id',
                'orders.order_status',
                'orders.order_date',
                'payment_methods.name as payment_method',
                'customers.name as customer_name',
                'customers.email',
                'customers.address',
                'customers.phone_number'
            )
            ->get();
        return view('order.show_order', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
//        $request->validate([
//            'name_receive' => 'required|min:2',
//            'address_receive' => 'required',
//            'phone_receive' => 'required',
//            'payment' => 'required',
//        ]);
        $cart = $request->session()->get('cart', []);
        $data = [
            'admin_id' => 1,
            'customer_id' => Auth::guard('customer')->user()->id,
            'payment_method_id' => $request->all()['payment'],
            'name' => $request->all()['name_receive'],
            'address' => $request->all()['address_receive'],
            'phone' => $request->all()['phone_receive'],
            'order_date' => now(),
            'order_status' => 1,
        ];
        $order_id = Order::create($data)->id;
        foreach ($cart as $cartItem) {
            $data = [
                'amount' => $cartItem['quantity'],
                'unit_price' => $cartItem['price'],
                'order_id' => $order_id,
                'product_detail_id' => $cartItem['configuration']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            Order_Detail::create($data);
        }
        $request->session()->put('cart', []);
        return redirect()->route('user.thank');
    }




//    public function store(Request $request)
//    {
//        $request->validate([
//            'name_receive' => 'required|min:2',
//            'address_receive' => 'required',
//            'phone_receive' => 'required',
//            'payment' => 'required',
//        ]);
//
//        $order = new Order();
//        $order->customer_id = Auth::guard('customer')->user()->id;
//        $order->name = $request->input('name_receive');
//        $order->address = $request->input('address_receive');
//        $order->phone = $request->input('phone_receive');
//        $order->payment_method_id = $request->input('payment');
//        $order->order_status = 1; // Set trạng thái đơn hàng, ví dụ: Chưa xác nhận
//        $order->order_date = now(); // Ngày đặt hàng
//        vardump($order); die;
//        $order->save();
//        // Redirect đến trang cần thiết, ví dụ: trang cảm ơn hoặc trang xác nhận đơn hàng
//        return redirect()->route('user.thank');
//    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $user_id = Auth::guard('customer')->user()->id;
        $orders = DB::table('orders')
            ->join('payment_methods', 'orders.payment_method_id', '=', 'payment_methods.id')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select(
                'orders.id as order_id',
                'orders.order_status',
                'orders.order_date',
                'payment_methods.name as payment_method',
                'customers.name as customer_name',
                'customers.email',
                'customers.address',
                'customers.phone_number',
                'orders.name as orders_name',
                'orders.address as orders_address',
                'orders.phone as orders_phone',
            )->where('customer_id', $user_id)
            ->get();
        return view('user.order', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function thumbs(Request $request, Order $order)
    {
        // Kiểm tra và cập nhật trạng thái đơn hàng
        if ($order->order_status == 1) {
            $order->order_status = 2;
            $order->save();
        }

        // Redirect hoặc xử lý tiếp theo
        return redirect()->route('order.show_order');
    }
    public function cancel($id)
    {
        $user_id = Auth::guard('customer')->user()->id;
        $orders = Order::where(['id'=>$id, 'customer_id'=>$user_id, 'order_status' => 1])->count();
        if ($orders > 0) {
            Order::where(['id'=>$id, 'customer_id'=>$user_id])->update(['order_status' => 0]);
        } else {
            echo "Đơn hàng ko tồn tại";
        }
    }
    public function received($id)
    {
        $user_id = Auth::guard('customer')->user()->id;
        $orders = Order::where(['id'=>$id, 'customer_id'=>$user_id, 'order_status' => 2])->count();
        if ($orders > 0) {
            Order::where(['id'=>$id, 'customer_id'=>$user_id])->update(['order_status' => 3]);
        } else {
            echo "Đơn hàng ko tồn tại";
        }
    }
}
