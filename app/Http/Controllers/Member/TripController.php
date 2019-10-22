<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TripController extends Controller
{
    public function getList() {
    	return view('trip.list');
    }


    public function getAdd() {
    	return view('trip.add');
    }



    public function postAdd(Request $request)
    {
        
        $this->validate($request,
            [
                
            ],
            [
                
               
            ]);
        $trip = new trip;
        $trip->vehicle_id = $request->vehicle_id;
        // dd($request->all());
        // die();
        $trip->user_id = Auth::user()->id;
        $trip->from_id = $request->from_id;
        $trip->to_id = $request->to_id;
        $trip->title = $request->title;
        $trip->day_go = $request->day_go;
        $trip->day_to = $request->day_to;
        $trip->seat = $request->seat;
        $trip->price = $request->price;

        $trip->save();
        return redirect('')->with('thongbao','Thêm thành công');
    
    }
}
