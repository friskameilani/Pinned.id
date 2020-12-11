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
    	$orders_nosorted = Order::where('user_id', Auth::user()->id)->get();
        $orders = $orders_nosorted->sortByDesc('created_at');
    	return view('history.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::where('id', $id)->first();
        if (!$order) {
            abort(404);
        }
        else {
            return view('history.detail', compact('order'));
        }
     	
    }

    public function destroy($id)
    {
        $order = Order::where('id', $id)->delete();

	    return redirect('/history')-> with('success', 'Data berhasil dihapus');
    }

    
}