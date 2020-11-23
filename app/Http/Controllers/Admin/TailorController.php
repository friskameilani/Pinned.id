<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tailor;

class TailorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $tailors = Tailor::all();
        return view('admin/tailor/tailor', compact('tailors'));
    }

    public function createtailor()
    {
        return view('admin.tailor.add');
    }

    public function posttailor(Request $request)
    {
        if($request->hasFile('tailor_photo'))
        {
            $dest = "uploads/tailors";
            $filename = $request->file('tailor_photo');
            $filename-> move($dest, $filename->getClientOriginalName());
        }

        Tailor::create($request->all());
        return redirect('/admintailor');
    }

    public function showtailor(Tailor $tailor)
    {
        return view('admin.tailor.view', compact('tailor'));
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
