<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Trip;

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
        return view('guest.trip.view', $data);
    }
}
