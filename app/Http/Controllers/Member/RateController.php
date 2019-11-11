<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Booking;
use App\Model\Member;
use App\Model\Rate;
use Auth;

class RateController extends Controller
{
    protected $model;

    public function __construct(Rate $model)
    {
        $this->model = $model;
    }

    public function getRateBooking($id, Booking $booking_model)
    {
        $data['booking'] = $booking_model->findOrFail($id);
        if(!$data['booking']->verify) return redirect()->back();
        return view('member.booking.rate', $data);
    }

    public function postRateBooking($id, Request $request, Rate $rate_model, Booking $booking_model, Member $member_model)
    {
        $data['member_id'] = Auth::guard('member')->user()->id;
        $data['booking_id'] = $id;
        $rate = $rate_model::firstOrNew($data);
        $rate->save();
        $data = $request->only($rate_model->fillable);
        $rate->update($data);

        $booking = $booking_model->findOrFail($id);
        $trip_owner = $booking->trip->member;
        $trip_owner->rate = $booking->rates->avg('rate_type_id');
        $trip_owner->save();
        return redirect()->route('member.booking.list.get');
    }
}
