<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //

    protected $table = 'wards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','city_id','district_id','name'
        
    ];
    public function district()
    {
        return $this->belongsTo('App\Model\district');
    }
    
    public function city()
    {
        return $this->belongsTo('App\Model\city');
    }

    public function places()
    {
        return $this->hasMany('App\Model\Place');
    }
}
