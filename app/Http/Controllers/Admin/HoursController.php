<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Busroute;
use App\Model\Company;
use App\Model\City;
use App\Model\Place;
use App\Model\ward;
use App\Model\district;
use App\Model\hour;
use App\Model\day;
use Auth;


class HoursController extends Controller
{
   
    protected $model;
    public function __construct(hour $model)
    {
        $this->model = $model;
         $this->view_prefix = 'admin.hour.';

    }

     public function getList() {
        $data['busroutes']=Busroute::all();
        $data['companies']=Company::all();
        $data['days']=Day::all();
        $data['hours']=hour::all();
    return view('admin.hour.list',$data);
    }

    public function getAdd() {
        $companies = Company::all();
        $busroutes=Busroute::all();
        $days=Day::all();
        return view('admin.hour.add', ['companies'=>$companies,'busroutes'=>$busroutes,'days'=>$days]);
    }
    
    public function postAdd(Request $request)
    {
        // $data['name']= $req->name;
        $this->validate($request,
            [
               
            ],
            [
                 
                
            ]
        );
        $hour = new hour;
        $hour->busroute_id=$request->busroutes;
        $hour->day_id=$request->days;
        $hour->time=$request->time;
        $hour->save();

        return redirect()->route('admin.hour.add.get')->with('status', 'Thêm tuyến bus thành công!');
   
}




   public function getEdit($id)
    {
        $data['hours'] = $this->model->findOrFail($id);
        
        return view($this->view_prefix.'edit',$data);
    }
     public function postEdit($id, Request $req)
    {
        $hour = $this->model->findOrFail($id);
        $data = $req->only($this->model->fillable);
        $hour->update($data);
        return redirect()->route('admin.hour.list.get')->with('status', 'Lưu thay đỔi thành công!');
    }
}