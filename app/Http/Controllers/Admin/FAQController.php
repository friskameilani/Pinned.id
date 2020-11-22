<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $faqs = FAQ::all();
        return view('faq', compact('faqs'));
    }

    public function create(Request $request) //admin can create
    {
        $faq = new FAQ;
        $faq->ask = $request->ask;
        $faq->ask = $request->answer;
        $order->save();
        
        return redirect('/adminfaq');
    }

    public function update(Request $request)
    {
    	$faq = FAQ::where('id', $id);
    	$faq->ask = $request->ask;
        $faq->ask = $request->answer;
        $faq->update();
        
        return redirect('/adminfaq');
    }

    public function destroy($id) 
    {
        $faq = FAQ::where('id', $id)->delete();

	    return redirect('/adminfaq');
    }
}
