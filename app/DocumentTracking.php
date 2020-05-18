<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Department;

class DocumentTracking extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User','posted_by','id');
    }

    public function document()
    {
    	return $this->belongsTo('App\Document','document_id','id');
    }

    public function department_from($id)
    {
        return Department::findOrFail($id);
    }

    public function department()
    {
    	return $this->belongsTo('App\Department','department_id','id');
    }

    public function approved($id)
    {
    	$user = User::findOrFail($id);
    	return $user->first_name . ' '. $user->last_name;
    }

}
