<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
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

    public function ordering(Request $request, $id)
    {	
    	$product = Product::where('id', $id)->first();
    	$date = Carbon::now();

    	//cek validasi
    	$cek_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_order))
    	{
    		$order = new Order;
	    	$order->user_id = Auth::user()->id;
	    	$order->date = $date;
	    	$order->status = 0;
	    	$order->total_price = 0;
          //  $pesanan->kode = mt_rand(100, 999);
	    	$order->save();
    	}

    	//simpan ke database pesanan detail
    	$new_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$order_detail = new OrderDetail;
	    	$order_detail->product_id = $product->id;
	    	$order_detail->order_id = $new_order->id;
	    	$order_detail->total = $request->total_order;
	    	$order_detail->total_price = $product->price*$request->total_order;
	    	$order_detail->save();
    	}else 
    	{
    		$oder_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();
    		$order_detail->total = $order_detail->total+$request->total_order;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $product->price*$request->total_order;
	    	$order_detaik->total_price = $order_detail->total_price+$harga_pesanan_detail_baru;
	    	$order_detail->update();
    	}

    	//jumlah total
    	$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$order->total_price = $order->total_price+$product->price*$request->total_order;
    	$order->update();
    	
        Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
    	return redirect('home');

    }

}
