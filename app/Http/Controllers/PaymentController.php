<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\Order;
use Auth;
use File;


class PaymentController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index($random_code) //Ini view buat nampilin page ny
    {
        $order = Order::where('random_code', $random_code)->first();
        if ((!$order) || ($order->user_id != Auth::user()->id))  {
            abort(404);
        }
        else{
            return view('payment.index', compact('order'));
        } 
    }

    public function create(Request $request, $random_code) //Ini user create payments
    {
        
        $order = Order::where('random_code', $random_code)->first();
        $this->validate($request, [
			'date' => 'required|date_format:Y-m-d',
		]);
        
        if($request->hasFile('transfer_evidence'))
        {
            $dest = "uploads/payments";
            $filename = $request->file('transfer_evidence');
            $filename-> move($dest, $filename->getClientOriginalName());
            $namefile = $filename->getClientOriginalName();
        }

        $payment = new Payment;
        $payment->user_id = Auth::user()->id;
        $payment->order_id = $order->random_code;
        $payment->account_name = $request->account_name;
        $payment->bill_amount = $request->bill_amount;
        $payment->transfer_evidence = $namefile;
        $payment->date = $request->date;
        $payment->save();
        
        $order->status = 1;
        $order->save();

        return redirect('/history'); //ntar ganti pake notif berhasil
    }

    //Ini buat apa yak, lupa
    // public function edit($random_code) //Ini view buat nampilin page ny
    // {
    //     $order = Order::where('random_code', $random_code)->first();
    //     if ((!$order) || ($order->user_id != Auth::user()->id))  {
    //         abort(404);
    //     }
    //     else{
    //         return view('payment.index', compact('order'));
    //     } 
        
    // }

    // public function update(Request $request)
    // {
    	 
    // 	$payment->user_id = Auth::user()->id;
    // 	$payment->order_id = $order->random_code;
    // 	$payment->account_name = $request->account_name;
    //     $payment->bill_amount = $request->bill_amount;
    //     $payment->transfer_evidence = $request->transfer_evidence;
    //     $payment->date = $request->date;
    	
    // 	$user->update();
    //     return redirect('/history');
    // }

}
