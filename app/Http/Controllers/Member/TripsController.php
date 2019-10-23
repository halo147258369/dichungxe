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
        $data['trips'] = $this->model->with('vehicle', 'from.city', 'to.city')->get();
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
        return redirect()->route('member.trip.list.get')->with('status', 'Thêm phương tiện thành công!');
    }

    public function getEdit($id)
    {
        $data['cities'] = City::all();
        $data['vehicles'] = $this->vehicle->all();
        $data['trip'] = $this->model->findOrFail($id);
        return view($this->view_prefix.'edit', $data);
    }

    public function postEdit($id, Request $req)
    {
        for($i=0; $i<2; $i++) {
            $place[$i] = Place::findOrFail($req->place_id[$i]);
            $place[$i]->name = $req->name[$i];
            $place[$i]->ward_id = $req->ward_id[$i];
            $place[$i]->district_id = $req->district_id[$i];
            $place[$i]->city_id = $req->city_id[$i];
            $place[$i]->save();
        }
        $data = $req->only($this->model->fillable);
        $vehicle = $this->model->findOrFail($id);
        $vehicle->update($data);
        return redirect()->route('member.trip.list.get')->with('status', 'Thêm phương tiện thành công!');
    }

    public function getDelete($id)
    {
        $vehicle = $this->model->findOrFail($id);
        $vehicle->destroy();
        return view($this->view_prefix.'list')->with('status', 'Xoá thành công!');
    }
}
