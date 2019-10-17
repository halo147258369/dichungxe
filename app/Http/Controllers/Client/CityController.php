<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
   public function getList() {
    	return view('city.list');
    }
}
