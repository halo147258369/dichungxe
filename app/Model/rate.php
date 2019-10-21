<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
     public function rate_type()
    {
        return $this->belongsTo('App\rate_type');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
