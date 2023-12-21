<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category', 'brand')->get();

        $totalAmountByProductId = DB::table('configurations')
            ->select('product_id', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('product_id')
            ->get();

// Chuyển kết quả tổng số lượng thành một mảng kết hợp (associative array)
        $totalAmounts = [];
        foreach ($totalAmountByProductId as $total) {
            $totalAmounts[$total->product_id] = $total->total_amount;
        }

// Thêm tổng số lượng vào mỗi sản phẩm trong danh sách sản phẩm
        foreach ($products as $product) {
            $product->total_amount = isset($totalAmounts[$product->id]) ? $totalAmounts[$product->id] : 0;
        }

        return view('product.show_product', [
            'products' => $products
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('product.add_product', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        $request->validate([
            'name' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);
        Product::create(array_merge($request->all(), ['image' => $request->file('image')->getClientOriginalName()]));
        return redirect()->route('product.show_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    public function showConfig(Product $product)
    {
        $configurations = $product->configurations; // Assuming you have defined the relationship in your Product model.
        return view('config.show_config', compact('product', 'configurations'));
    }

    public function check_configuration(Product $product)
    {
        $configurationCount = $product->configurations->count();

        if ($configurationCount === 0) {
            return redirect()->route('product.show_product', ['product' => $product])->with('error', 'Bạn phải thêm ít nhất một cấu hình cho sản phẩm này.');
        }

        // Chỉ chuyển trang khi có dữ liệu cấu hình
        return redirect()->route('product.config', ['product' => $product]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('product.edit_product',[
            'product' => $products,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $products)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->getClientOriginalName();
        }

        $products->update($data);

        return redirect()->route('product.show_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        $products->delete();
        return redirect()->route('product.show_product');
    }


    public function UserProduct()
    {
        $brands = Brand::all();// Lấy dữ liệu all bảng Brand
        $categories = Category::all(); //Lấy dữ liệu all bảng Category
        $products = Product::with('brand')->get();

        return view('user.product', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }
}
