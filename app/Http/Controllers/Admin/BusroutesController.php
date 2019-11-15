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
    
    public function getList() {
     $data['place']=Place::all();

        return view('bus.add',$data);
    }

    public function getAdd() {
        $data['city'] = city::all();
        $data['place'] = Place::all();
        $data['ward'] = ward::all();
        $data['district'] = district::all();
        return view('admin.bus.add',$data);
    }
     public function postAdd(Request $request)
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
        $data['user_id'] = Auth::guard('admin')->user()->id;
        $data['from_id'] = $place[0]->id;
        $data['to_id'] = $place[1]->id;
        $vehicle = $this->model->insert($data);
        return redirect()->route('admin.busroute.list.get')->with('status', 'Thêm tuyến bus thành công!');
    }
  
    
}
