<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function order()
    {
        return view('admin.order.view'); //belum ada
    }

    public function catalog()
    {
        return view('admin.catalog.index'); //belum ada
    }

    public function catalogview()
    {
        return view('admin.catalog.view'); //belum ada
    }

    public function catalogedit()
    {
        return view('admin.catalog.edit');
    }

    public function catalogadd()
    {
        return view('admin.catalog.add');
    }

    
}