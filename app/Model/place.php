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

    public function district()
    {
        return $this->ward->district;
    }

    public function city()
    {
        return $this->district->city;
    }


    public function trip_from()
    {
        return $this->hasMany('App\trip', 'from_id');
    }

    public function trip_to()
    {
        return $this->hasMany('App\trip', 'to_id');
    }
}
