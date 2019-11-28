<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Trip;
use App\Model\city;
use App\Model\district;
use App\Model\ward;
use App\Model\hour;
use App\Model\vehicle;
use App\Model\busroute;
use App\Model\Company;
use App\Model\day;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function getIndex()
    {
        $data['trips'] = Trip::where('day_go', '>',Carbon::now())->where('seat','>','remain_seat')->get();
  
        $data['cities'] = city::all();
        $data['district'] = district::all();
        $data['ward'] = district::all();
        $data['busroutes'] = busroute::all();
        $data['hours'] = hour::all();
        $data['vehicle'] = vehicle::all();
        $data['company'] = Company::all();
        $data['day'] = Day::all();
        return view('guest.index', $data);
    }


}
