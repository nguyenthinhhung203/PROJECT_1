<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Http\Requests\StoreConfigurationRequest;
use App\Http\Requests\UpdateConfigurationRequest;
use App\Models\Product;
use App\Models\Product_Detail;
use App\Models\ProductDetail;
use App\Models\Specification;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function detail(Configuration $configuration)
    {
        return $configuration->specificaltions;
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
     * @param  \App\Http\Requests\StoreConfigurationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfigurationRequest $request, Product $product)
    {
        $newConfiguration = Configuration::create($request->all());

        // Lấy ID của bản ghi vừa được tạo
        $configurationId = $newConfiguration->id;

        // Tạo bản ghi mới trong bảng "product_details" với configuration_id tương ứng
        Product_Detail::create([
            'configuration_id' => $configurationId,
        ]);

        return redirect()->back()->with('success', 'Cấu hình đã được thêm thành công.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show(Configuration $configuration)
    {
        //
    }
    public function showSpecificaltion(Configuration $configuration)
    {
        $specificaltions = $configuration->specificaltions; // Assuming you have defined the relationship in your Product model.
        return view('specificaltion.show_specificaltion', compact('configuration', 'specificaltions'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfigurationRequest  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfigurationRequest $request, Configuration $configuration)
    {
        // Lấy dữ liệu từ biểu mẫu
        $data = $request->only(['name', 'price', 'amount']);


        // Cập nhật thông tin cấu hình
        $configuration->name = $data['name'];
        $configuration->price = $data['price'];
        $configuration->amount = $data['amount'];

        if ($configuration->amount < 0 || $configuration->price < 0) {
            return redirect()->back();
        }
        $configuration->save();
        // Chuyển hướng đến trang hiển thị cấu hình của sản phẩm
        return redirect()->back()->with('success', 'Cấu hình đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
//        $configuration->delete();
//
//        $remainingConfigurations = Configuration::where('product_id', $configuration->product_id)->count();
//
//        if ($remainingConfigurations == 1) {
//            // Nếu chỉ còn một cấu hình, chuyển hướng về trang product.show_product
//            return redirect()->back();
//        } else {
//            // Nếu không còn cấu hình nào, quay về trang danh sách sản phẩm hoặc trang chính
//            return redirect()->route('product.show_product'); // Hoặc thay bằng route của trang chính nếu cần
//        }
        $remainingConfigurations = Configuration::where('product_id', $configuration->product_id)->count();

        if ($remainingConfigurations > 1) {
            // Nếu còn nhiều hơn một cấu hình, thực hiện xóa
            $configuration->delete();
        }

        // Sau khi xóa, chuyển hướng về trang product.show_product
        return redirect()->route('product.show_product');
    }
}
