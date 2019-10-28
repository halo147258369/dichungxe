<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $table = 'districts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','city_id','name'
        
    ];
    public function city()
    {
        return $this->belongsTo('App\Model\City');
    }

    public function wards()
    {
        return $this->hasMany('App\Model\Ward');
    }
}
