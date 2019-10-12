<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    public function trip()
    {
    	//
        return $this->belongsTo('App\Model\trip');
    }
    public function users()
    {
    	//
        return $this->Hasmany('App\Model\User');
    }
}
