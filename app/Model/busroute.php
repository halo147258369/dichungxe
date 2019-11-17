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
        'name','to_id', 'from_id'
    ];
    public $timestamps = false;
public function hour()
    {
        return $this->belongsTo('App\Model\hour','busroute_id','id');
    }

}
