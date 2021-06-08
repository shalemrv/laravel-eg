<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct() {
		$this->middleware(['guest']);
	}

	public function index()
	{
		return view('auth.login');
	}

	public function login(Request $request)
	{
		$this->validate($request, [
			'email'		=> 'required|email|max:50',
			'password'	=> 'required'
		]);

		if(!auth()->attempt($request->only('email', 'password'))) {
			return back()->with('status', 'Invalid Login Details');
		}

		return redirect()->route('products');
	}
}