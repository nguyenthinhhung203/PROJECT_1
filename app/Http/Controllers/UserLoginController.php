<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(StoreLoginRequest $request)
    {
        var_dump($request->all());

        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        //Các cái này chỉ là điều kiện cho mỗi ô điền dữ liệu

        User::create($request->all());
        //Đẩy dữ liệu lện database

    }
}
