<?php

namespace App\Http\Controllers;

use App\Models\Payment_Method;
use App\Http\Requests\StorePayment_MethodRequest;
use App\Http\Requests\UpdatePayment_MethodRequest;
use Illuminate\Support\Facades\Redirect;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_methods = Payment_Method::all();
        return view('payment_method.show_payment_method', [
            'payment_methods' => $payment_methods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment_method.add_payment_method');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayment_MethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment_MethodRequest $request)
    {
        // Kiểm tra xem tên thương hiệu đã tồn tại trong cơ sở dữ liệu chưa
        $existingPayment = Payment_Method::where('name', $request->input('name'))->first();

        if ($existingPayment) {
            // Nếu đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Tên Phương Thức Thanh Toán đã tồn tại.');
        }
        Payment_Method::create($request->all());
        return Redirect::route('payment_method.show_payment_method');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Method $payment_Method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Method $payment_Methods)
    {
        return view('payment_method.edit_payment_method', [
            'payment_Method' => $payment_Methods
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayment_MethodRequest  $request
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayment_MethodRequest $request, Payment_Method $payment_Methods)
    {
        $payment_Methods->update($request->all());
        return Redirect::route('payment_method.show_payment_method');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Method $payment_Methods)
    {
        $payment_Methods->delete();
        return Redirect::route('payment_method.show_payment_method');
    }
}
