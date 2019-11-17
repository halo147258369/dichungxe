<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Busroute;
use App\Model\Company;
use App\Model\City;
use App\Model\Vehicle;
use App\Model\Place;
use App\Model\ward;
use App\Model\district;
use Auth;


class BusroutesController extends Controller
{
    

     protected $model;
    public function __construct(Busroute $model)
    {
        $this->model = $model;
    }
    public function getList() {
     $data['place']=Place::all();

        return view('admin.bus.list',$data);
    }

    public function getAdd() {
        $data['cities'] = city::all();
        
        $data['wards'] = ward::all();
        
        return view('admin.bus.add',$data);
    }
     public function postAdd(Request $req)
    {
        $data['name']= $req->name;
        $data['from_id'] = $req->ward_id[0];
        $data['to_id'] = $req->ward_id[1];
        $this->model->insert($data);
        return redirect()->route('admin.busroute.list.get')->with('status', 'Thêm tuyến bus thành công!');
    }
  
    
}
