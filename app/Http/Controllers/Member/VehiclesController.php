<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Vehicle;
use App\Model\Vehicle_type;
use Auth;

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
        $data['vehicles'] = $this->model->where('member_id', Auth::guard('member')->user()->id)->paginate(10);
        return view($this->view_prefix.'list', $data);
    }

    public function getAdd()
    {
        $data['vehicle_types'] = $this->vehicle_type->all();
        return view($this->view_prefix.'add', $data);
    }

    public function postAdd(Request $req)
    {
        // $vehicle = new vehicle;
        // $vehicle->name=$req->name;
        // $vehicle->number=$req->number;
        //  $vehicle->seat=$req->seat;
        // $vehicle->description=$req->description;
        //  $vehicle->vehicle_type_id=$req->vehicle_types;
        $vehicle = $req->only($this->model->fillable);
        $vehicle['member_id'] = Auth::guard('member')->user()->id;
      

          if($req->hasFile('image'))
        {
           
            $file = $req->file('image');
            $duoi = $file->getClientOriginalExtension();

            if ($duoi !='jpg' && $duoi != 'png' && $duoi != 'gif')
            {
                return redirect('member/vehicle/add')->with('loi','Không phải file hình');
            }

            $name = $file->getClientOriginalName();

            $image = str_random(4)."_".$name;
           while (file_exists("upload/Vehicle/".$image)) {
               # code...
                 $image = str_random(4)."_".$name;
           }
           $file->move("upload/Vehicle",$image);
    
        }
        else
        {
            $vehicle->image="";
        }
         $vehicle = $this->model->insert($vehicle);

        
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
