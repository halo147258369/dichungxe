<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public $fillable = ['user_id', 'vehicle_id', 'price', 'to_id', 'from_id', 'title','day_go', 'day_to'];
     public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Model\vehicle');
    }
    

    public function places()
    {
        return $this->hasmany('App\Model\place');
    }


    public function bookings()
    {
        return $this->hasmany('App\Model\booking');
    }
}
