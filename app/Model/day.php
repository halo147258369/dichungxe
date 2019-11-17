<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //

    protected $table = 'days';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name'
    ];
    public $timestamps = false;
 public function hour()
    {
        return $this->hasMany('App\Model\hour','day_id','id');
    }
}