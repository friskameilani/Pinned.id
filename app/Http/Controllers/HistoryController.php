<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\User;
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

	    return redirect('/history')-> with('success', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $order = Order::where('id', $id)->first();
        
     	return view('history.detail', compact('order'));
    }
}