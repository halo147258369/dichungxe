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
      $busroute=busroute::all();
       $data['place']=Place::all();
       $ward=ward::all();
        return view('admin.bus.list',$data,['busroute'=>$busroute,'ward'=>$ward]);
    // $data['wards']=ward::with('district', 'district.city')->get();
    // return view('admin.ward.list',$data);
    }

    public function getAdd() {
        $data['cities'] = city::all();
        
        $data['wards'] = ward::all();
        
        return view('admin.bus.add',$data);
    }
     public function postAdd(Request $req)
    {
        $busroute = new Busroute;
        $busroute->name=$req->name;
        $busroute->from_id=$req->ward_id[0];
        $busroute->to_id=$req->ward_id[1];
        // $data['name']= $req->name;
        // $data['from_id'] = $req->ward_id[0];
        // $data['to_id'] = $req->ward_id[1];


        if($req->hasFile('image'))
        {
           
            $file = $req->file('image');
            $duoi = $file->getClientOriginalExtension();

            if ($duoi !='jpg' && $duoi != 'png' && $duoi != 'gif')
            {
                return redirect('admin/busroutes/add')->with('loi','Không phải file hình');
            }

            $name = $file->getClientOriginalName();

            $image = str_random(4)."_".$name;
           while (file_exists("upload/Vehicle/".$image)) {
               # code...
                 $image = str_random(4)."_".$name;
           }
           $file->move("upload/Vehicle",$image);
        $busroute->image = $image;
        }
        else
        {
            $busroute->image="";
        }
         $busroute->save();

    //     return redirect('admin/busroute/them')->with('thongbao','Thêm thành công');
    
    // }
        // $this->model->insert($data,['busroute'=>$busroute]);
        return redirect()->route('admin.busroute.list.get')->with('status', 'Thêm tuyến bus thành công!');
    }
  
    public function getEdit($id)
    {
        $busroute = busroute::find($id);
        return view('admin.busroute.edit',['busroute'=>$busroute]);
    }
    // public function postEdit(Request $request,$id)
    // {
    //      $busroute = new Busroute;
    //     $busroute->name=$req->name;
    //     $busroute->from_id=$req->ward_id[0];
    //     $busroute->to_id=$req->ward_id[1];
    //     // $data['name']= $req->name;
    //     // $data['from_id'] = $req->ward_id[0];
    //     // $data['to_id'] = $req->ward_id[1];


    //     if($req->hasFile('image'))
    //     {
           
    //         $file = $req->file('image');
    //         $duoi = $file->getClientOriginalExtension();

    //         if ($duoi !='jpg' && $duoi != 'png' && $duoi != 'gif')
    //         {
    //             return redirect('admin/busroutes/add')->with('loi','Không phải file hình');
    //         }

    //         $name = $file->getClientOriginalName();

    //         $image = str_random(4)."_".$name;
    //        while (file_exists("upload/Vehicle/".$image)) {
    //            # code...
    //              $image = str_random(4)."_".$name;
    //        }
    //        $file->move("upload/Vehicle",$image);
    //       $busroute->image = $image;
    //     }
    //     else
    //     {
    //         $busroute->image="";
    //     }
    //      $busroute->save();

    //     return redirect('admin/busroute/edit/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    // }
    // public function getXoa($id)
    // {
    //     $busroute = busroute::find($id);
    //     $busroute->delete();
    //     return redirect('admin/busroute/list')->with('thongbao','Bạn đã xóa thành công');
    // }
    
}
