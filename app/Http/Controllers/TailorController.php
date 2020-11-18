<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TailorController extends Controller
{
    public function index()
    {
        $tailors = Tailor::all();
        return view('tailor.index', compact('tailors'));
    }
}
