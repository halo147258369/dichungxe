<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Trip;
use App\Model\Vehicle;
use App\Model\City;
use App\Model\Place;
use Auth;


class TripsController extends Controller
{
    protected $model;
    protected $view_prefix;
    protected $vehicle;
    public function __construct(Trip $model, Vehicle $vehicle)
    {
        $this->model = $model;
        $this->view_prefix = 'member.trip.';
        $this->vehicle = $vehicle;
    }
   
    public function getList()
    {
        $data['vehicles'] = $this->model->all();
        return view($this->view_prefix.'list', $data);
    }

    public function getAdd()
    {
        $data['cities'] = City::all();
        $data['vehicles'] = $this->vehicle->all();
        return view($this->view_prefix.'add', $data);
    }

    public function postAdd(Request $req)
    {
        for($i=0; $i<2; $i++) {
            $place[$i] = new Place;
            $place[$i]->name = $req->name[$i];
            $place[$i]->ward_id = $req->ward_id[$i];
            $place[$i]->district_id = $req->district_id[$i];
            $place[$i]->city_id = $req->city_id[$i];
            $place[$i]->save();
        }
        $data = $req->only($this->model->fillable);
        $data['user_id'] = Auth::guard('member')->user()->id;
        $data['from_id'] = $place[0]->id;
        $data['to_id'] = $place[1]->id;
        $vehicle = $this->model->insert($data);
        return view($this->view_prefix.'list')->with('status', 'Thêm phương tiện thành công!');
    }

    public function getEdit($vehicle_id)
    {
        $data['vehicle'] = $this->model->findOrFail($vehicle_id);
        return view($this->view_prefix.'edit', $data);
    }

    public function postEdit($vehicle_id, Request $req)
    {
        $vehicle = $this->model->findOrFail($vehicle_id);
        $vehicle->update($req);
        return view($this->view_prefix.'list')->with('status', 'Lưu thay đỔi thành công!');
    }

    public function getDelete($vehicle_id)
    {
        $vehicle = $this->model->findOrFail($vehicle_id);
        $vehicle->destroy();
        return view($this->view_prefix.'list')->with('status', 'Xoá thành công!');
    }
}
