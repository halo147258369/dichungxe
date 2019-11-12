<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\district;
use App\Model\ward;
use App\Model\city;
class WardsController extends Controller
{
    
   public function getList() {
    $data['wards']=ward::with('district', 'district.city')->get();
    return view('admin.ward.list',$data);
    }


    

    public function getAdd()
    {
	    	$districts = district::all();
	    	$cities=city::all();
        return view('admin.ward.add',['districts'=>$districts,'cities'=>$cities]);
    }

    public function postAdd(Request $request)
    {
        //$tintuc = new TinTuc;
        //$tintuc->save();
        
        $this->validate($request,
            [
               
            ],
            [
                
                
            ]);
        $ward = new ward;
        $ward->city_id = $request->city_id;
        $ward->district_id = $request->district_id;
        $ward->name = $request->name;
        $ward->save();

        return redirect('admin.ward.add')->with('thongbao','Thêm thành công');
    }
    

    public function getEdit($id)
    {
    	$district = district::all();
    	$ward = ward::find($id);
        return view('admin.ward.sua',['ward'=>$ward,'district'=>$district]);
    }
    public function postEdit(Request $request,$id)
    {
        $ward =ward::find($id);
        $this->validate($request,
            [
                
            ],
            [
                
            ]);
        $ward->name =$request->name;
        $ward->district_id= $request->district_id;
        $ward->save();
        return redirect('admin/ward/sua/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    }
    public function getXoa($id)
    {
        $ward = ward::find($id);
        $ward->delete();
        return redirect('admin/ward/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
