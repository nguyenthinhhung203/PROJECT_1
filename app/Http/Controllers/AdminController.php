<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.show_admin', [
            'admins' => $admins
        ]);
    }

    public function show_index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $adminData = $request->all();
        $adminData['password'] = Hash::make($request->input('password'));

        Admin::create($adminData);

        return redirect()->route('admin.show_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admins)
    {
        return view('admin.edit_admin', [
            'admin' => $admins
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admins)
    {
        $admins->update($request->all());
        return Redirect::route('admin.show_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admins)
    {
        $admins->delete();
        return Redirect::route('admin.show_admin');
    }

    public function loginProcess(Request $request)
    {
        $account = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($account))
        {
           $admins = Auth::guard('admin')->user();
           Auth::login($admins);
           session(['admin' => $admins]);
           return redirect()->route('admin.index');
        }
        else
        {
            session()->flash('error', 'Email hoặc mật khẩu không chính xác.');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->forget('admin');
        return redirect()->route('admin.login');
    }



}
