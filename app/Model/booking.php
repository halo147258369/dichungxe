<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $fillable = ['user_id', 'trip_id', 'seat', 'verify'];

    public function trip()
    {
    	//
        return $this->belongsTo('App\Model\trip');
    }
    public function user()
    {
    	//
        return $this->belongsTo('App\Model\User');
    }
}
