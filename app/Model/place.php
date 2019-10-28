<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function ward()
    {
        return $this->belongsTo('App\Model\ward');
    }

    public function district()
    {
        return $this->belongsTo('App\Model\district');
    }

    public function city()
    {
        return $this->belongsTo('App\Model\city');
    }

    public function trips_from()
    {
        return $this->hasOne('App\trip', 'from_id');
    }

    public function trips_to()
    {
        return $this->hasOne('App\trip', 'to_id');
    }
}
