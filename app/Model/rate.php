<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $fillable = ['rate_type_id', 'booking_id', 'member_id'];

    public function rate_type()
    {
        return $this->belongsTo('App\Model\rate_type');
    }
    public function member()
    {
        return $this->belongsTo('App\Model\Member');
    }
    public function booking()
    {
        return $this->belongsTo('App\Model\Booking');
    }
}
