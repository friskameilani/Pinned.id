<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FAQ;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $faqs = FAQ::all();
        return view('admin.faq.faq', compact('faqs'));
    }

    public function create(Request $request) //admin can create
    {
        return view('admin.tailor.new');
    }

    public function post(Request $request) //admin can create
    {
        $faq = new FAQ;
        $faq->ask = $request->ask;
        $faq->answer = $request->answer;
        $faq->save();
        
        return redirect('/adminfaq');
    }

    public function edit($id)
    {
        $faq = FAQ::where('id', $id)->first();
        return view('admin.faq.edit', compact('faq'));
    
    }

    public function update(Request $request, $id)
    {
    	$faq = FAQ::where('id', $id)->first();
    	$faq->ask = $request->ask;
        $faq->answer = $request->answer;
        $faq->update();
        
        return redirect('/adminfaq');
    }

    public function destroy($id) 
    {
        $faq = FAQ::where('id', $id)->delete();

	    return redirect('/adminfaq');
    }
}
