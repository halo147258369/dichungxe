<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\city;
class CitiesController extends Controller
{
   public function getList() {
      	$city = city::all();
    	return view('admin.city.list',['city'=>$city]);
    }
    //  public function getList()
    // {
    //     $data['cities'] = $this->model->with('vehicle', 'from.city', 'to.city')->get();
    //     return view($this->view_prefix.'list', $data);
    // }

  public function getAdd() {
    	return view('admin.city.add');
    }
     public function postAdd(Request $request)
    {
        
        
        $this->validate($request,
            [
               
            ],
            [
                
                
            ]);
        $city = new city;
        $city->name= $request->name;
        $city->save();

        return redirect('admin.city/add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id)
    {
    	$city = city::find($id);
        return view('admin.city.edit',['city'=>$city]);


    }
    public function postEdit(Request $request,$id)
    {
        $city =city::find($id);
        $this->validate($request,
            [
                'name' => 'required|unique:thanh pho,name'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên thể loại',
                'name.required'=>'Tên Thành phố đã tồn tại',
            ]);
        $city->ten =$request->name;
        
      $city->save();
        return redirect('admin.city/edit/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    }
    public function getXoa($id)
    {
        $city = city::find($id);
        $city->delete();
        return redirect('city/list')->with('thongbao','Bạn đã xóa thành công');
    }
    


}
