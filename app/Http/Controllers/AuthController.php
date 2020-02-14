<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AuthController extends Controller
{
    
    public function login()
    {
    	//display login
    	return view('login');
    }

    public function login_check(Request $request)
    {
    	//check login
    	$data = $request->except('_token');
    	if($user = Auth::attempt($data)){
    		return redirect()->route('user_home');
    	}else{
    		return back()->with('error','test');
    	}
    }

    public function register()
    {
    	//register form
    	return view('register');
    }
    public function register_check(Request $request)
    {
    	$data = $request->except('_token');
    	$data['password'] = bcrypt($data['password']);

    	User::create($data);
    	return redirect()->route('login')->with('success','test');
    }
}
