<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;

class User_login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(StoreLoginRequest $request)
    {

        $request->validate([
            'name' => 'required|min:6',
            'Email' => 'required',
            'Password' => 'required|min:6',
            //Các cái này chỉ là điều kiện cho mỗi ô điền dữ liệu
        ]);
        User_login::create($request->all());
        //Đẩy dữ liệu lện database

    }
}
