<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
	public function __construct() {
		$this->middleware(['guest']);
	}

	public function index() {
		return view('auth.register');
	}
	
	public function store(Request $request) {

		$this->validate($request, [
			'name'		=> 'required|max:50',
			'username'	=> 'required|max:50',
			'email'		=> 'required|email|max:50',
			'password'	=> 'required|confirmed'
		]);

		User::create([
			'name'		=> $request['name'],
			'username'	=> $request['username'],
			'email'		=> $request['email'],
			'password'	=> Hash::make($request['password'])
		]);

		auth()->attempt($request->only('email', 'password'));

		return redirect()->route('products');
	}


}
