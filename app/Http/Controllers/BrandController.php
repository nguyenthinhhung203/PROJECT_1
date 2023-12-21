<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brand.show_brand', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.add_brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        // Kiểm tra xem tên thương hiệu đã tồn tại trong cơ sở dữ liệu chưa
        $existingBrand = Brand::where('name', $request->input('name'))->first();

        if ($existingBrand) {
            // Nếu đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Tên thương hiệu đã tồn tại.');
        }

        // Nếu không tồn tại, tạo mới bản ghi
        Brand::create($request->all());

        return redirect()->route('brand.show_brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brands)
    {
        return view('brand.edit_brand', [
            'brand' => $brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brands)
    {
        $brands->update($request->all());
        return Redirect::route('brand.show_brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brands)
    {
        $brands->delete();
        return Redirect::route('brand.show_brand');
    }


    public function UserBrand(Brand $brand)
    {
        $brands = Brand::all();// Lấy dữ liệu all bảng Brand
        $categories = Category::all(); //Lấy dữ liệu all bảng Category
        $products = $brand->products;

        return view('user.brand', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
