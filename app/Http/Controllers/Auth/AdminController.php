<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tailor;
use App\Product;
use App\User;
use App\Order;
use Carbon\Carbon;

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
        $total_tailor = Tailor::count(); //TTotal semua penjahit yang telah diinput
        $total_product = Product::count(); // Total semua product yang telah diinput
        $total_user = User::count(); //Total semua akun user
        $total_order = Order::count(); //Jumlh seluruh order
        $confirmed_order = Order::where('status','>','1')->count(); //Order yang sudah dikonfirmasi
        $month_order = Order::whereMonth('created_at', Carbon::now()->month) //List Order Bulan Ini
                                ->where('status','!=','4')
                                ->get();
        $needconfirmed_order = Order::where('status','=','1')->get(); //Order yang belum dikonfirmasi
        

        return view('admin.dashboard')
        ->with('total_tailor', $total_tailor)
        ->with('total_product', $total_product)
        ->with('total_user', $total_user)
        ->with('total_order', $total_order)
        ->with('confirmed_order', $confirmed_order)
        ->with('month_order', $month_order)
        ->with('needconfirmed_order', $needconfirmed_order);
    }
}