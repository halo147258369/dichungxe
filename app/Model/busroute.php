<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class busroute extends Model
{
    //

    protected $table = 'busroutes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name', 'to_id', 'from_id', 'image', 'company_id'
    ];
    public $timestamps = false;

    public function hours()
    {
        return $this->hasmany('App\Model\hour', 'busroute_id', 'id');
    }
    public function places()
    {
        return $this->hasmany('App\Model\place');
    }
    public function from()
    {
        return $this->hasOne('App\Model\Place', 'id', 'from_id');
    }

    public function to()
    {
        return $this->hasOne('App\Model\Place', 'id', 'to_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Model\Company');
    }
}
