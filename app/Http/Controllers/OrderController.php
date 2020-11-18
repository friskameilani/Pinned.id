<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\OrderDetail;
use App\Tailor;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $product = Product::where('id', $id)->first();

        return view('order.index', compact('product'));
	}

	public function self_order()
    {
        return view('order.self_order');
    }

    public function ordering(Request $request, $id)
    {	
		$product = Product::where('id', $id)->first();
		$tailor = Tailor::where('id', $product->tailor_id)->first();
    	$date = Carbon::now();

    	//cek validasi
    	$cek_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database order
    	// if(empty($cek_order))
    	
    		$order = new Order;
			$order->user_id = Auth::user()->id;
			$order->product_id = $product->id;
			$order->tailor_id = $tailor->id;
			$order->ordered_name = $request->ordered_name;
			$order->ordered_address = $request->ordered_address;
			$order->ordered_phone = $request->ordered_phone;
			$order->qty = $request->qty;
			$order->size = $request->size;
			$order->notes = $request->notes;
	    	$order->date = $date;
	    	$order->status = 0;
			$order->total_price = $product->product_price * $order->qty;
			$order->save();
			
          //  $order->kode = mt_rand(100, 999);
    	return redirect('/');
	}
	
	public function self_ordering(Request $request)
    {	
    	$date = Carbon::now();

    	//cek validasi
    	// $cek_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database order
    	// if(empty($cek_order))
    	
    		$order = new Order;
			$order->user_id = Auth::user()->id;
			$order->tailor_id = $request->tailor_id;
			$order->ordered_name = $request->ordered_name;
			$order->ordered_address = $request->ordered_address;
			$order->ordered_phone = $request->ordered_phone;
			$order->qty = $request->qty;
			$order->size = $request->size;
			$order->notes = $request->notes;
	    	$order->date = $date;
	    	$order->status = 0;
			$order->design = $request->design;
			$order->total_price = 0;

			$order->save();

		return redirect('/');

	}

}
