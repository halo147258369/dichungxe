<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\district;
use App\Model\city;
class DistrictController extends Controller
{
    
   public function getList() {
    	return view('district.list');
    }

    public function getAdd() {
    	$city = city::all();
    	return view('district.add',['city'=>$city]);
    }
     public function postAdd(Request $request)
    {
        
        
        $this->validate($request,
            [
                'name' => 'required|unique:quận huyện,name'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên ',
                'name.unique'=>'Tên đã tồn tại',
                
            ]);
        $district = new district;
        // $district->city_id=$request->city_id
        $district->name= $request->name;
        $district->save();

        return redirect('district.add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id)
    {
    	$district = district::find($id);
        return view('district.edit',['district'=>$district]);


    }
    public function postEdit(Request $request,$id)
    {
        $district =district::find($id);
        $this->validate($request,
            [
                'name' => 'required|unique:quận huyện,ten'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên quận huyện',
                'name.required'=>'Tên quận huyện đã tồn tại',
            ]);
     
      $district->name =$request->name;
      $district->save();
        return redirect('district/edit/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    }
    public function getXoa($id)
    {
        $district = district::find($id);
        $district->delete();
        return redirect('district/list')->with('thongbao','Bạn đã xóa thành công');
    }
    
}
