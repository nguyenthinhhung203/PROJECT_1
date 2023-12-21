<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Http\Requests\StoreOrder_DetailRequest;
use App\Http\Requests\UpdateOrder_DetailRequest;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index($orderId)
        {
            $orders = Order::join('order_details', 'order_details.order_id', '=', 'orders.id')
                ->join('product_details', 'order_details.product_detail_id', '=', 'product_details.id')
                ->join('configurations', 'product_details.configuration_id', '=', 'configurations.id')
                ->join('products', 'configurations.product_id', '=', 'products.id')
                ->select(
                    'order_details.amount',
                    'order_details.unit_price',
                    'products.name as product_name',
                    'products.image',
                    'configurations.name as configuration_name',
                    'orders.order_status',
                    'orders.order_date'
                )
                ->where('orders.id', $orderId)
                ->get();

            // Check if the order exists
            if (!$orders) {
                abort(404); // Handle the case when the order is not found
            }


            // Trả về view và truyền dữ liệu đơn hàng và chi tiết đơn hàng
            return view('order_detail.order_detail', compact('orders'));
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
     * @param  \App\Http\Requests\StoreOrder_DetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrder_DetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Order_Detail $order_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_Detail $order_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrder_DetailRequest  $request
     * @param  \App\Models\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrder_DetailRequest $request, Order_Detail $order_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_Detail $order_Detail)
    {
        //
    }

    public function UserOrderDetail($order_id){
        $orderDetails = DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('product_details', 'order_details.product_detail_id', '=', 'product_details.id')
            ->join('configurations', 'product_details.configuration_id', '=', 'configurations.id')
            ->join('products', 'configurations.product_id', '=', 'products.id')
            ->select(
                'order_details.amount',
                'order_details.unit_price',
                'products.name as product_name',
                'products.image',
                'configurations.name as configuration_name',
                'configurations.price',
                'orders.order_status',
                'orders.order_date'
            )
            ->where('orders.id', $order_id)
            ->get();

        return view('user.Order_Detail', [
            'orderDetails' => $orderDetails]);
    }
}
