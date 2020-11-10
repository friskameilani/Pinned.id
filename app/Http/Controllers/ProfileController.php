<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profile.index', compact('user'));
    }

    public function edit()
    {
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->phone_number = $request->phone_number;
    	$user->address = $request->address;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();
        return redirect('profile');
        // ->with(['success' => 'Profil Berhasil di Update']);
    }
}
