<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tailor;
use App\Product;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_tailor = Tailor::count();
        $total_product = Product::count();
        $total_user = User::count();

        return view('admin.dashboard')->with('total_tailor', $total_tailor)
        ->with('total_product', $total_product)
        ->with('total_user', $total_user);
    }
}