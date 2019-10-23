<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getView() 
    {
        return redirect()->route('member.trip.list.get');
    	return 'Hello member'; //view('client.dashboard');
    }
}
