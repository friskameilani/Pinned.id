<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\Tailor;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id) //User
    {
        $product = Product::where('id', $id)->first();

        return view('order.index', compact('product'));
	}

	public function show_spec() //Self Order / Spescific order
    {
		$tailors = Tailor::all();
		
        return view('order.self_order', compact('tailors'));
    }

    public function create(Request $request, $id) //Create normal order
    {	
		$this->validate($request, [
			'qty' => 'required|numeric',
		]);

		$product = Product::where('id', $id)->first();
		$tailor = Tailor::where('id', $product->tailor_id)->first();
    	$date = Carbon::now();
    	
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

			return redirect()->route('detailorder', [$order->random_code]);
	}
	
	public function create_spec(Request $request) //User
    {	
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
		$date = Carbon::now();
		$tailors = Tailor::all();
    	
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
			$order->status = 0;
			$order->design = $filename->getClientOriginalName();
			$order->total_price = 0;
			$order->date = $date;

			$order->save();

		return redirect()->route('detailorder', [$order->random_code]);
	}

	public function showdetail($random_code)
    {
		$order = Order::where('random_code', $random_code)->first();
		if ((!$order) || ($order->user_id != Auth::user()->id))  {
            abort(404);
		}
		else{
		return view('order.detail', compact('order'));
		}
    }

}
