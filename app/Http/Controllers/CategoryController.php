<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.show_category', [
           'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // Kiểm tra xem tên thương hiệu đã tồn tại trong cơ sở dữ liệu chưa
        $existingCategory = Category::where('name', $request->input('name'))->first();

        if ($existingCategory) {
            // Nếu đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Tên Danh Muc đã tồn tại.');
        }
        Category::create($request->all());
        return Redirect::route('category.show_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categories)
    {
        return view('category.edit_category', [
            'category' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $categories)
    {
        $categories->update($request->all());
        return Redirect::route('category.show_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categories)
    {
        $categories->delete();
        return Redirect::route('category.show_category');
    }


    public function UserCategory(Category $category)
    {
        $brands = Brand::all();// Lấy dữ liệu all bảng Brand
        $categories = Category::all(); //Lấy dữ liệu all bảng Category
        $products = $category->products;

        return view('user.category', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
