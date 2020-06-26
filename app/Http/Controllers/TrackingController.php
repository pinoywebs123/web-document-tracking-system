<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Document;
use App\DocumentTracking;
use App\History;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{
    
    public function forwarding($tracking_id)
    {
    	$departments = Department::all();
    	return view('user.forwarding',compact('departments'));
    }

    public function forwarding_check(Request $request, $tracking_id)
    {
    	
    	$find_tracking = DocumentTracking::find($tracking_id);
    	if(!$find_tracking){
    		return back()->with('error','Tracking ID Can not be found');
    	}

    	
    	DB::beginTransaction();

    	$history = new History;
    	$history->document_id 	= $find_tracking->document_id;
    	$history->posted_by 	= $find_tracking->posted_by;
    	$history->department_id = $find_tracking->department_from;
    	$history->approved_by 	= $find_tracking->approved_by;
    	$history->save();

    	$find_tracking->update([
    		'department_from' 	=> $find_tracking->department_id,
    		'department_id'		=> $request->department_id,
    		'status_id'			=> 1
    	]);

    	DB::commit();


    	return back()->with('success','Files has been forward successfully!');
    }

    public function track_view()
    {
        return view('track');
    }

    public function track_check(Request $request)
    {
        $find_document = Document::where('random_string', $request->tracking)->first();
        if(!$find_document){
            return back()->with('error','Tracking ID Can not be found');
        }
       
        return view('track_result',compact('find_document'));
    }
}
