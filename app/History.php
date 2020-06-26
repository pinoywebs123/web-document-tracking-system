<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = [];

    public function document()
    {
    	return $this->belongsTo('App\Document');
    }
    public function department()
    {
    	return $this->belongsTo('App\Department');
    }

    public function creator()
    {
    	return $this->belongsTo('App\User', 'posted_by','id');
    }

    public function approved()
    {
    	return $this->belongsTo('App\User', 'approved_by','id');
    }
}
