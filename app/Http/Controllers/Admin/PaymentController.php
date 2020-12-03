<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function allpayments() //Menampilkan semua order yang ada di page
    {
        $payments = Payment::all();
        return view('admin.payment.payment', compact('payments')); //Nanti diganti menyesuaikan nama file bladeny
	}
	
	public function payment_detail(Payment $payment) //Menampilkan detail order persatuan
    {
        return view('admin.payment.detail', compact('payment')); //Nanti diganti menyesuaikan nama file bladeny
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
