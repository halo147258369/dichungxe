<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    //
    public function city()
    {
        return $this->belongsto('App\city');
    }
    public function districts()
{
	return $this->hasmany('App\district');
}
}
