<?php

namespace App\Http\Controllers;
use App\Tailor;
use Illuminate\Http\Request;

class TailorController extends Controller
{
    public function index()
    {
        $tailors = Tailor::all();
        return view('admin/tailor/tailor', compact('tailors'));
    }

    public function createtailor()
    {
        return view('admin/tailor/add');
    }

    public function posttailor(Request $request)
    {
        Tailor::create($request->all());
        return redirect('/admintailor');
    }

    public function showtailor(Tailor $tailor)
    {
        return view('tailor.index', compact('tailor'));
    }
    
    public function edit(Tailor $tailor)
    {
        return view('admin/tailor/edit', compact('tailor'));
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
        return redirect();
    }
}