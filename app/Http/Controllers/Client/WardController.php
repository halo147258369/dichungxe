<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WardController extends Controller
{
    
   public function getList() {
    	return view('ward.list');
    }
}
