<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function user_home()
    {
    	return view('user.template');
    }
    public function user_logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
    public function user_new()
    {
    	//new upload
    	return view('user.new');
    }
    public function user_pending()
    {
    	//pending
    	return view('user.pending');
    }
    public function user_incoming()
    {
    	//incoming
    	return view('user.incoming');
    }
    public function user_forwarded()
    {
    	//forwarded or history
    	return view('user.forwarded');
    }
}
