<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlacesController extends Controller
{
    
    public function getList() {
    	return view('place.list');
    }

    public function getAdd() {
    	return view('place.add');
    }
    
    public function postAdd(Request $request)
    {
        
        
        $this->validate($request,
            [
                'name' => 'required|unique:congty,name'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên ',
                'name.unique'=>'Tên đã tồn tại',
                
            ]);
        $place = new place;
        $place->name= $request->name;
        $place->save();

        return redirect('place.add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id)
    {
    	$place = place::find($id);
        return view('place.edit',['place'=>$place]);


    }
    public function postEdit(Request $request,$id)
    {
        $place =place::find($id);
        $this->validate($request,
            [
                'name' => 'required|unique:congty,ten'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên thể loại',
                'name.required'=>'Tên thể loại đã tồn tại',
            ]);
        $place->ten =$request->name;
        
      $place->save();
        return redirect('place/edit/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    }
    public function getXoa($id)
    {
        $place = place::find($id);
        $place->delete();
        return redirect('place/list')->with('thongbao','Bạn đã xóa thành công');
    }  
   
}
