<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;


    public function hour()
    {
        return $this->hasMany('App\Model\hour','company_id','id');
    }
 
}
