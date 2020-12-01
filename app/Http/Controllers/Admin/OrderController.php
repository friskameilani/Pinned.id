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

    public function allorder() //Menampilkan semua order yang ada di page
    {
        $orders = Order::all();
        return view('admin/order/order', compact('orders')); //Nanti diganti menyesuaikan nama file bladeny
	}
	
	public function order_detail($id) //Menampilkan detail order persatuan
    {
        $product = Order::where('id', $id)->first();
        return view('admin.vieworder', compact('product')); //Nanti diganti menyesuaikan nama file bladeny
    }

    public function destroy($id) //Menghapus order (Otomatis terhapus juga di history user)
    {
        $order = Order::where('id', $id)->delete();

	    return redirect('/admin/order'); //pathnya diganti ntar
    }

    public function update(Request $request) //Hanya buat update status ordernya 
    {
    	$order = Order::where('id', $id);
    	$order->status = $request->status;
        $order->update();
        
        return redirect('/adminorder');
    }
}
