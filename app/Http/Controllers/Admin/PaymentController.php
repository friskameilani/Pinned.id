<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function allpayments() //Menampilkan semua order yang ada di page
    {
        $payments = Payment::all();
        return view('admin.payment', compact('payments')); //Nanti diganti menyesuaikan nama file bladeny
	}
	
	public function payment_detail($id) //Menampilkan detail order persatuan
    {
        $payment = Payment::where('id', $id)->first();
        return view('admin.viewpayment', compact('payment')); //Nanti diganti menyesuaikan nama file bladeny
    }
}
