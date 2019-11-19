<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = [
        'id',
        'busroute_id','company_id', 'day_id'
    ];
    public $timestamps = false;


     public function day()
    {
        return $this->belongsTo('App\Model\Day');
    }
    public function busroutes()
    {
        return $this->hasMany('App\Model\Busroute','busroute_id','id');
    }
 public function companies()
    {
        return $this->hasMany('App\Model\Company','company_id','id');
    }
 

}
