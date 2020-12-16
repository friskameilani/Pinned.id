<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.catalog', compact('products'));
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        if(!$product){
            abort(404);
        }
        else {
            return view('product.index', compact('product'));
        }
        
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $result = Product::where('product_name','like',"%".$search."%")
        ->orWhereHas('tailor',function($query) use($search){$query->where('tailor_name','like',"%".$search."%");})
        ->paginate();

        return view('product.result', compact('result'));
    }
    
}
