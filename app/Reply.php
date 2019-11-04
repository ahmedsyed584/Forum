<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $hidden = [ ];

 	public function discussion()
 	{
 		return $this->belongsTo('App\Discussion');
 	}
}
