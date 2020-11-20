<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use Auth;
use File;


class PaymentController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() //Ini view buat di admin
    {
        return view('payment.index');
    }

    public function view() //Ini view buat di admin
    {
        $payments = Payment::all();
        return view('......?', compact('payments'));
    }

    public function create(Request $request) //Ini user create payments
    {

        $this->validate($request, [
			'date' => 'required|date_format:Y-m-d',
		]);
        
        if($request->hasFile('transfer_evidence'))
        {
            $dest = "uploads/payments";
            $filename = $request->file('transfer_evidence');
            $filename-> move($dest, $filename->getClientOriginalName());
        }

        $payment = new Payment;
        $payment->user_id = Auth::user()->id;
        $payment->order_id = $request->order_id;
        $payment->account_name = $request->account_name;
        $payment->bill_amount = $request->bill_amount;
        $payment->transfer_evidence = $request->transfer_evidence;
        $payment->date = $request->date;
        $payment->save();

        return redirect('/'); //ntar ganti pake notif berhasil
    }

    public function destroy($id) //Ini delete buat di admin
    {
        $payments = Payment::where('id', $id);
        $image = app_path("uploads/payments/{$payments->transfer_evidence}");
        if (File::exists($image)) 
        {
            File::delete($image);
        }
        $payments->delete();
    }

}
