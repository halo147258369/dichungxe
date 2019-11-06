<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vehicles()
    {
        $this->hasMany('App\Model\Vehicle');
    }

    public function bookings()
    {
        $this->hasMany('App\Model\Booking');
    }
}
