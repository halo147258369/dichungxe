<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
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
