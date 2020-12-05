<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tailor;
use App\Product;

class TailorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $tailors = Tailor::all();
        // $products = Product::where('tailor_id', $tailors->id)->get();
        return view('admin/tailor/tailor', compact('tailors'));
    }

    public function createtailor()
    {
        return view('admin.tailor.add');
    }

    public function posttailor(Request $request)
    {
        $this->validate($request, [
			'image' => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);
        
        if($request->hasFile('image'))
        {
            $dest = "uploads/tailors";
            $filename = $request->file('image');
            $realname = $filename->getClientOriginalName();
            $filename-> move($dest, $realname);
        }

            $tailor = new Tailor;
            $tailor->tailor_name = $request->tailor_name;
            $tailor->tailor_age = $request->tailor_age ;
            $tailor->tailor_photo = $realname;
            $tailor->tailor_address = $request->tailor_address;
            $tailor->tailor_contact = $request->tailor_contact;
            $tailor->tailor_desc = $request->tailor_desc;

            $tailor->save();

        return redirect('/admintailor');
    }

    public function showtailor(Tailor $tailor)
    {
        $products = Product::where('tailor_id', $tailor->id)->get();
        return view('admin.tailor.view', compact(['tailor', 'products']));
    }
    
    public function edit($id)
    {
        $tailor = Tailor::where('id', $id)->first();
        return view('admin.tailor.edit', compact('tailor'));
    }

    public function postedit(Request $request, Tailor $tailor)
    {
        Tailor::where('id', $tailor->id)
            ->update([
                'tailor_name' => $request->tailor_name,
                'tailor_age' => $request->tailor_age,
                'tailor_address' => $request->tailor_address,
                'tailor_contact' => $request->tailor_contact,
                'tailor_desc' => $request->tailor_desc
                ]);

        return redirect('/admintailor');
    }

    public function delete(Tailor $tailor)
    {
        $tailor = Tailor::where('id', $tailor->id)->delete();
	    return redirect('/admintailor');
    }
}
