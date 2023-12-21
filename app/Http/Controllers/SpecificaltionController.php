<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Specificaltion;
use App\Http\Requests\StoreSpecificaltionRequest;
use App\Http\Requests\UpdateSpecificaltionRequest;

class SpecificaltionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSpecificaltionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecificaltionRequest $request, Configuration $configuration)
    {
        Specificaltion::create($request->all());

        return redirect()->back()->with('success', 'Thông số đã được thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specificaltion  $specificaltion
     * @return \Illuminate\Http\Response
     */
    public function show(Specificaltion $specificaltion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specificaltion  $specificaltion
     * @return \Illuminate\Http\Response
     */
    public function edit(Specificaltion $specificaltion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpecificaltionRequest  $request
     * @param  \App\Models\Specificaltion  $specificaltion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecificaltionRequest $request, Specificaltion $specificaltion)
    {
        $data = $request->only(['name', 'value']);

        // Cập nhật thông tin cấu hình
        $specificaltion->name = $data['name'];
        $specificaltion->value = $data['value'];
        $specificaltion->save();
        // Chuyển hướng đến trang hiển thị cấu hình của sản phẩm
        return redirect()->back()->with('success', 'Thông số đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specificaltion  $specificaltion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specificaltion $specificaltion)
    {
        $specificaltion->delete();

        $remainingSpecifications = Specificaltion::where('configuration_id', $specificaltion->configuration_id)->count();

        if ($remainingSpecifications == 0) {

            // Redirect to the "product.config" route
            return redirect()->route('product.config', ['product' => $specificaltion->configuration_id->product_id]);
        }

        // If there are remaining specifications, you can redirect back or to another page.
        return redirect()->back();
    }
}
