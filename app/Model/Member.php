<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'description', 'address', 'rate'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vehicles()
    {
        return $this->hasMany('App\Model\Vehicle');
    }

    public function bookings()
    {
        return $this->hasMany('App\Model\Booking');
    }

    public function trips()
    {
        return $this->hasMany('App\Model\Trip');
    }

    public function reviews()
    {
        $trips = $this->trips;
        $trip_ids = array_column($trips->all(), 'id');
        $bookings = Booking::whereIn('trip_id', $trip_ids)->get();
        $booking_ids = array_column($bookings->all(), 'id');
        $rates = Rate::whereIn('booking_id', $booking_ids)->get();
        return $rates;
    }
}
