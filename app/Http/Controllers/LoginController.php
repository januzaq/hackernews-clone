<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{    

	public function getlogin()
	{
		if (Auth::check()) {
			return redirect()->route('/');
		}
		return view('auth.login');
	}

	public function authenticate(Request $request)
	{
		if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('/');
        }
        return redirect()->route('getlogin')->with('error', 'Ошибка!');
	}
}
