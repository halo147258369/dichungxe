<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public function city()
    {
        return $this->belongsto('App\Model\City');
    }

    public function wards()
    {
        return $this->hasmany('App\Model\Ward');
    }
}
