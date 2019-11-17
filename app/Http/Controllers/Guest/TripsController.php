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
       
        $vehicle = vehicle::all();
        $member = Member::all();
        $rate=Rate::all();
        // $data['trip'] = $this->model->findOrFail($id)
        $trip = DB::table('Trips')
            ->join('vehicles', 'Trips.vehicle_id', '=', 'vehicles.id')
            ->join('members', 'Trips.member_id', '=', 'members.id')
            ->where('Trips.id',$id )->first();
            // dd($trip);   
        return view('guest.trip.view',['trip'=>$trip,'vehicle'=>$vehicle,'rate'=>$rate]);
    }
}






 // $data = db::table('vehicles')
        // ->join('Trips', 'vehicles.id', '==', 'Trips.vehicle_id')
        // ->where('Trips.id', $id)->get();
        // dd($data);
 // $trip = trip::where('vehicle_id',$id)->first();
        // dd($trip);