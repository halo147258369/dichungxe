<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    //
    public function district()
    {
        return $this->belongsto('App\Model\district');
    }
    public function city()
    {
        return $this->belongsto('App\Model\city');
    }

    // public function chuyendi()
    // {
    //     return $this->belongsto('App\chuyendi','idDiemDi','id');
        
    // }

    //  public function chuyendi()
    // {
    //     return $this->belongsto('App\chuyendi','idDiemDen','id');
        
    // }

     public function places()
{
    return $this->hasmany('App\Model\place');
}
}
