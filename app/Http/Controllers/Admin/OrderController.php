<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() //Menampilkan semua order yang ada di page
    {
        $orders = Order::all();
        return view('admin/order/order', compact('orders')); //Nanti diganti menyesuaikan nama file bladeny
	}
	
	public function show(Order $order) //Menampilkan detail order persatuan
    {
        return view('admin.order.detail', compact('order')); //Nanti diganti menyesuaikan nama file bladeny
    }

    public function destroy($id) //Menghapus order (Otomatis terhapus juga di history user)
    {
        $order = Order::where('id', $id)->delete();

	    return redirect('/admin/order'); //pathnya diganti ntar
    }

    public function update(Request $request) //Hanya buat update status ordernya 
    {
    	$order = Order::findOrFail($request->order_id);
        $order->update($request->all());
        
        return back();
    }

    public function updateharga(Request $request, Order $order) //Hanya buat update harga
    {
    	Order::where('id', $order->id)
        ->update([
            'total_price' => $request->total_price
            ]);
        
        return redirect('/adminorder');
    }
}
