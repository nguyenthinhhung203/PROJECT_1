<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use App\Models\Product_Detail;
use App\Http\Requests\StoreProduct_DetailRequest;
use App\Http\Requests\UpdateProduct_DetailRequest;
use App\Models\Specificaltion;

class ProductDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreProduct_DetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_DetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_Detail  $product_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Detail $product_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_Detail  $product_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Detail $product_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_DetailRequest  $request
     * @param  \App\Models\Product_Detail  $product_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_DetailRequest $request, Product_Detail $product_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_Detail  $product_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Detail $product_Detail)
    {
        //
    }


    public function UserProductDetail(Product $product)
    {
        $brands = Brand::all();// Lấy dữ liệu all bảng Brand
        $categories = Category::all(); //Lấy dữ liệu all bảng Category
        $pro_brand = $product->brand()->get()->get(0)->name;
        $configuration = Configuration::where('product_id', $product->id)->get(); // Lấy dữ liệu bảng Configuration dựa trên ID sản phẩm
        $specificaltions = Specificaltion::where('configuration_id',$configuration->get(0)->id)->get();
        return view('user.product_detail', [
            'specificaltions' => $specificaltions,
            'product' => $product,
            'pro_brand' => $pro_brand,
            'configurations' => $configuration,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
