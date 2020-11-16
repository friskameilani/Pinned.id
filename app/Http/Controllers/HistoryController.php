<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\User;
use App\OrderDetail;
use Auth;
use DB;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$orders = Order::where('user_id', Auth::user()->id)->get();

    	return view('history.index', compact('orders'));
    }

    public function destroy($id)
    {
        $order = Order::where('id', $id)->delete();
    // DB::table('orders')->where('order_id',$id)->delete();
	return redirect('/history')-> with('success', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
    	$order = Order::where('id', $id)->first();
    	$order_detail = OrderDetail::where('order_id', $order->id)->get();

     	return view('history.detail', compact('order','order_detail'));
    }
}