<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $fillable = ['name', 'seat', 'description', 'vehicle_type_id', 'number'];
    
     public function rates()
    {
        return $this->hasMany('App\Model\rate');
    }

    public function vehicle_type()
    {
        return $this->belongsto('App\Model\vehicle_type');
    }

    public function trips()
    {
        return $this->hasMany('App\Model\trip');
    }
}
