<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\booking;

class BookingController extends Controller
{
    protected $model;

    public function __construct(booking $model)
    {
        $this->model = $model;
    }

    public function getList()
    {
        $data['bookings'] = $this->model->orderBy('verify')->paginate(20);
        return view('admin.booking.list', $data);
    }

    public function getVerify($id)
    {
        $data['verify'] = true;
        $booking = $this->model->findOrFail($id);
        $booking->update($data);
        return redirect()->route('admin.booking.list.get')->with('status', 'Xác thực thành công');
    }
}
