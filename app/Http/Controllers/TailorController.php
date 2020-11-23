<?php

namespace App\Http\Controllers;
use App\Tailor;
use App\Product;
use Illuminate\Http\Request;

class TailorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function showtailor(Tailor $tailor)
    {
        // $orders = Order::where('user_id', Auth::user()->id)->get();
        $products = Product::where('tailor_id', $tailor->id)->get();
        return view('tailor.index', compact(['tailor', 'products']));
    }
    
}