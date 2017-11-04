<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{
    public function getregister()
    {
    	if(Auth::check()){
    		return redirect()->route('/');
    	}
    	return view('auth.register');
    }

    public function postregister(Request $request)
    {
    	$user = new User;
    	$user->username = $request->username;
    	$user->password = bcrypt($request->password);

    	if($user->save())
    	{
    		return redirect()->route('/');
    	}

    	return back()->with('error', 'Ошибка!');
    }
}
