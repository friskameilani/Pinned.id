<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FAQ;

class FAQController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('faq');
        $faqs = FAQ::all();
        return view('faq', compact('faqs'));
    }

    public function create() //admin can create
    {
        return view('faq');
    }
}
