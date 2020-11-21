<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product.index', compact('product'));
    }

    public function catalog()
    {
        $products = Product::all();
        return view('product.catalog', compact('products'));
    }
}
