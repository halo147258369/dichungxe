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
}
