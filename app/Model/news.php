<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
     protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'content', 'image', 
    ];

    public $timestamps = false;


 

}
