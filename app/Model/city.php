<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name'
    ];
    public $timestamps = false;

    public function districts()
	{
		return $this->hasmany('App\Model\district');
	}


	public function wards()
	{
		return $this->hasmany('App\Model\ward');
	}

}
