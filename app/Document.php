<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];

    public function tracking()
    {
    	return $this->hasOne('App\DocumentTracking','document_id','id');
    }

    public function history(){
    	return $this->hasMany('App\History','id','document_id');
    }
}
