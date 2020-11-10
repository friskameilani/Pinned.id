<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\User;
use App\OrderDetail;
use Auth;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$orders = Order::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('orders'));
    }

    public function detail($id)
    {
    	$order = Order::where('id', $id)->first();
    	$order_detail = OrderDetail::where('order_id', $order->id)->get();

     	return view('history.detail', compact('order','order_detail'));
    }
}