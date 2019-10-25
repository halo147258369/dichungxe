<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //
    public function district()
    {
        return $this->belongsto('App\Model\district');
    }
    
    public function city()
    {
        return $this->belongsto('App\Model\city');
    }

    public function places()
    {
        return $this->hasMany('App\Model\Place');
    }
}
