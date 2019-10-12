<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    public function districts()
	{
		return $this->hasmany('App\Model\district');
	}


	public function wards()
	{
		return $this->hasmany('App\Model\ward');
	}

}
