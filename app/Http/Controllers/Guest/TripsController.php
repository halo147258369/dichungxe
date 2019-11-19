<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Trip;
use App\Model\Member;
use App\Model\Rate;
use DB;
use App\Model\vehicle;
class TripsController extends Controller
{
    protected $model;
    public function __construct(Trip $model)
    {
        $this->model = $model;
    }
    public function getView($id)
    {
        $data['trip'] = $this->model->findOrFail($id);
        // dd($data);
        // dd($data['trip']->member->reviews());
        return view('guest.trip.view',$data);
    }
}






 // $data = db::table('vehicles')
        // ->join('Trips', 'vehicles.id', '==', 'Trips.vehicle_id')
        // ->where('Trips.id', $id)->get();
        // dd($data);
 // $trip = trip::where('vehicle_id',$id)->first();
        // dd($trip);