<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	/**
	 * Register new user
	 *
	 * @param $request Request
	 */
	public function register(Request $request)
	{
		// Validating data
		$this->validate($request, [
			'username' 	=> 'required|unique:users',
			'email'		=> 'required|email|unique:users',
			'password'	=> 'required'
		]);

		$hasher = app()->make('hash');

		$username = $request->input('username');
		$email	  = $request->input('email');
		$password = $hasher->make($request->input('password'));

		$register = User::create([
			'username' => $username,
			'email'	   => $email,
			'password' => $password
		]);

		if ($register) {
			$res['success'] = true;
			$res['message'] = 'Register success.';
		} else {
			$res['success'] = false;
			$res['message'] = 'Failed to register!';
		}

		return response($res);
	}


	public function getUser(Request $request, $id)
	{
		$user = User::where('id', $id)->get();
		if ($user) {
			$res['success'] = true;
			$res['message'] = $user;
		} else {
			$res['success'] = false;
			$res['message'] = 'Can\'t find user!';
		}

		return response($user);
	}
}