<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    //
     public function rate_types()
    {
    	//id 3 là của id_danhgia
        return $this->belongsTo('App\rate_type');
    }
    public function users()
    {
    	//id 3 là của id_danhgia
        return $this->belongsTo('App\User');
    }
}
