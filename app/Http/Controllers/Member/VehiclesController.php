<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Vehicle;
use App\Model\Vehicle_type;

class VehiclesController extends Controller
{
    protected $model;
    protected $view_prefix;
    protected $vehicle_type;
    public function __construct(Vehicle $model, Vehicle_type $vehicle_type)
    {
        $this->model = $model;
        $this->view_prefix = 'member.vehicle.';
        $this->vehicle_type = $vehicle_type;
    }
   
    public function getList()
    {
        $data['vehicles'] = $this->model->all();
        return view($this->view_prefix.'list', $data);
    }

    public function getAdd()
    {
        $data['vehicle_types'] = $this->vehicle_type->all();
        return view($this->view_prefix.'add', $data);
    }

    public function postAdd(Request $req)
    {
        $data = $req->only($this->model->fillable);
        $vehicle = $this->model->insert($data);
        return redirect()->route('member.vehicle.list.get')->with('status', 'Thêm phương tiện thành công!');
    }

    public function getEdit($vehicle_id)
    {
        $data['vehicle'] = $this->model->findOrFail($vehicle_id);
        $data['vehicle_types'] = $this->vehicle_type->all();
        return view($this->view_prefix.'edit', $data);
    }

    public function postEdit($vehicle_id, Request $req)
    {
        $vehicle = $this->model->findOrFail($vehicle_id);
        $data = $req->only($this->model->fillable);
        $vehicle->update($data);
        return redirect()->route('member.vehicle.list.get')->with('status', 'Lưu thay đỔi thành công!');
    }

    public function getDelete($vehicle_id)
    {
        $vehicle = $this->model->findOrFail($vehicle_id);
        $vehicle->destroy();
        return redirect()->route('member.vehicle.list.get')->with('status', 'Xoá thành công!');
    }
}