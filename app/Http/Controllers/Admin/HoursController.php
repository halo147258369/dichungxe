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
    }
    // public function getList() {
    //  $data['place']=Place::all();

    //     return view('admin.hour.add',$data);
    // }

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
                
                
            ]);
        $hour = new hour;
        $hour->company_id = $request->companies;
        $hour->busroute_id=$request->busroutes;
        $hour->day_id=$request->days;
        $hour->time=$request->time;
       $hour->save();
       return view('admin.hour.add');
}
}