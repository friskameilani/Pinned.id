<?php

namespace App\Http\Controllers;
use App\Tailor;
use App\Product;
use Illuminate\Http\Request;

class TailorController extends Controller
{
    public function show(Tailor $tailor)
    {
        // $orders = Order::where('user_id', Auth::user()->id)->get();
        $products = Product::where('tailor_id', $tailor->id)->get();
        return view('tailor.index', compact(['tailor', 'products']));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $result = Tailor::where('tailor_name','like',"%".$search."%")
        ->orWhereHas('tailor',function($query) use($search){$query->where('tailor_name','like',"%".$search."%");})
        ->paginate();

        return view('tailor.result', compact('result'));
    }
    
}