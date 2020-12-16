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

    public function create()
    {
        return view('admin.tailor.add');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
			'image' => 'sometimes', 'image', 'mimes:jpg,jpeg,png,bmp,tiff,svg |max:4096',
        ]);
        
        
        if($request->hasFile('image'))
        {
            $dest = "uploads/tailors";
            $filename = $request->file('image');
            $realname = $filename->getClientOriginalName();
            $filename-> move($dest, $realname);
        
            Tailor::create([
                'tailor_name' => $request->tailor_name,
                'tailor_age' => $request->tailor_age,
                'tailor_address' => $request->tailor_address,
                'tailor_contact' => $request->tailor_contact,
                'tailor_desc' => $request->tailor_desc,
                'tailor_photo' => $realname
            ]);
        }
        else
        Tailor::create([
            'tailor_name' => $request->tailor_name,
            'tailor_age' => $request->tailor_age,
            'tailor_address' => $request->tailor_address,
            'tailor_contact' => $request->tailor_contact,
            'tailor_desc' => $request->tailor_desc
        ]);

        return redirect('/admintailor');
    }

    public function show(Tailor $tailor)
    {
        $products = Product::where('tailor_id', $tailor->id)->get();
        return view('admin.tailor.view', compact(['tailor', 'products']));
    }
    
    public function edit($id)
    {
        $tailor = Tailor::where('id', $id)->first();
        return view('admin.tailor.edit', compact('tailor'));
    }

    public function update(Request $request,Tailor $tailor)
    {
        $path = public_path()."/uploads/tailors/";
        //code for remove old file

        if($request->hasFile('image'))
        {
            if($tailor->tailor_photo != 'default-avatar.png'  && $tailor->tailor_photo != '')
            {
            $old_photo = $path.$tailor->tailor_photo;
            unlink($old_photo);
            }
            $dest = "uploads/tailors";
            $filename = $request->file('image');
            $realname = $filename->getClientOriginalName();
            $filename-> move($dest, $realname);
        

            Tailor::where('id', $tailor->id)
            ->update([
                'tailor_name' => $request->tailor_name,
                'tailor_age' => $request->tailor_age,
                'tailor_address' => $request->tailor_address,
                'tailor_contact' => $request->tailor_contact,
                'tailor_desc' => $request->tailor_desc,
                'tailor_photo' => $realname
                ]);
        }
        else
        {
        Tailor::where('id', $tailor->id)
        ->update([
            'tailor_name' => $request->tailor_name,
            'tailor_age' => $request->tailor_age,
            'tailor_address' => $request->tailor_address,
            'tailor_contact' => $request->tailor_contact,
            'tailor_desc' => $request->tailor_desc
            ]);
        }

        return redirect('/admintailor');
    }

    //delete pada page tailor
    public function destroy(Request $request)
    {
        $tailor = Tailor::findOrFail($request->tailor_id);
        $tailor->delete();
        Product::where('tailor_id', $request->tailor_id)->delete();
        
        
        return back();
    }

    //delete pada page view tailor
    public function destroyview(Tailor $tailor)
    {
        Tailor::destroy($tailor->id);
        Product::where('tailor_id', $tailor->id)->delete();

	    return redirect('admintailor');
    }
}
