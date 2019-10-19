<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $table = "companies";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
}
