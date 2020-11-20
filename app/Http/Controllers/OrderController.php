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
		$this->validate($request, [
			'qty' => 'required|numeric',
		]);

		$product = Product::where('id', $id)->first();
		$tailor = Tailor::where('id', $product->tailor_id)->first();
    	$date = Carbon::now();

    	//cek validasi
    	$cek_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database order
    	// if(empty($cek_order))
    	
    		$order = new Order;
			$order->user_id = Auth::user()->id;
			$order->random_code = mt_rand(10000000,99999999);
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
		$this->validate($request, [
			'design' => 'mimes:jpeg,png,bmp,tiff |max:4096',
			'qty' => 'required|numeric',
			// 'phone_number' => ['required', 'string', 'min:11', 'regex:/^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/']
		]);
		if($request->hasFile('design'))
        {
            $dest = "uploads/self_design";
            $filename = $request->file('design');
            $filename-> move($dest, $filename->getClientOriginalName());
        }
    	
    		$order = new Order;
			$order->user_id = Auth::user()->id;
			$order->random_code = mt_rand(10000000,99999999);
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
