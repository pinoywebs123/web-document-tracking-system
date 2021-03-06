<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentTracking;
use Illuminate\Support\Facades\Storage;
use App\Document;
use Illuminate\Support\Str;
use App\History;
use Illuminate\Support\Facades\Auth;


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
        //dd(Storage::url('2.jpg'));
        $incomings = DocumentTracking::where('department_id', Auth::user()->department_id)->get();
    	//incoming
    	return view('user.incoming',compact('incomings'));
    }
    public function user_forwarded()
    {
        $my_histories = History::where('approved_by', Auth::id())->get();

    	//forwarded or history
    	return view('user.forwarded',compact('my_histories'));
    }

    public function accept_file($id)
    {
        ///$random = Str::random(6);
        $find = DocumentTracking::where('document_id',$id)->first();
        if($find)
        {
           $doc = Document::findOrFail($id);
        //    $doc->update([
        //     'random_string' => $random
        //    ]);

           $find->status_id = 2;
           $find->approved_by = Auth::id();
           $find->save();

        }
       return redirect()->back()->with('success','File Accepted Successfully!');
    }
}
