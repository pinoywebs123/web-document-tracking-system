<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Document;
use App\DocumentTracking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Department;

class DocumentController extends Controller
{
    public function user_new()
    {
    	//new upload
    	//return asset('public/8mcCp454vPsdbWt1XVPpJaYZ8OfG1sHAHvfuVU0N.jpeg');

    	$departments = Department::all();
    	return view('user.new',compact('departments'));
    }

    public function upload_docs(Request $request)
    {

    	$request->validate([
            'document' => 'required|max:2048',
            'department' => 'required'
        ]);
  
       	$cover = $request->file('document')->getClientOriginalName();;
	   
	    $url = Storage::putFileAs('public', $request->file('document'),$cover);

	    $random = Str::random(10);

	    $new_doc = new Document;
	    $new_doc->random_string = $random;
	    $new_doc->name = $cover;
	    $new_doc->posted_by = Auth::id();
	    $new_doc->department_id = $request->department;
	    $new_doc->save();

	    $doc_track = new DocumentTracking;
	    $doc_track->document_id = $new_doc->id;
	    $doc_track->posted_by = Auth::id();
        $doc_track->department_from = Auth::user()->department_id;
	    $doc_track->department_id = $request->department;
	    $doc_track->status_id = 1;
	    $doc_track->approved_by = null;
	    $doc_track->save();

        return redirect()->back()->with('success','Upload Successfully!');
	   
    }

    public function download_docs()
    {
    	return Storage::download('public/8mcCp454vPsdbWt1XVPpJaYZ8OfG1sHAHvfuVU0N.jpeg');
    }
}
