<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Busroute extends Model
{
    //

    protected $table = 'busroutes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name','to_id', 'from_id'
    ];
    public $timestamps = false;

}
