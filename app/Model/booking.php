<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $fillable = ['member_id', 'trip_id', 'seat', 'verify'];

    public function trip()
    {
    	//
        return $this->belongsTo('App\Model\trip');
    }
    public function member()
    {
    	//
        return $this->belongsTo('App\Model\Member');
    }

    public function rates()
    {
        return $this->hasMany('App\Model\Rate');
    }

    public function hasRate()
    {
        return (!count($this->rates)==0);
    }
}
