<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Trip;
use App\Model\city;
use App\Model\district;
use App\Model\ward;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function getIndex()
    {
        $data['trips'] = Trip::where('day_go', '>',Carbon::now())->where('seat', '<=', 'remain_seat')->get();
        $data['cities'] = city::all();
        $data['district'] = district::all();
        $data['ward'] = district::all();
        return view('guest.index', $data);
    }


}
