<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    //

      public function ward()
    {
        return $this->belongsto('App\ward');
    }

    public function trip()
    {
        return $this->belongsto('App\trip');
        
    }
}
