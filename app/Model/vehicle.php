<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
     public function rates()
    {
        return $this->hasMany('App\Model\rate');
    }

    public function vehicle_type()
    {
        return $this->belongsto('App\Model\vehicle_types');
    }

    public function trips()
    {
        return $this->hasMany('App\Model\trip');
    }
}
