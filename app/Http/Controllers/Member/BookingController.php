<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\city;
use App\Model\booking;
class BookingController extends Controller
{
   public function getList() {
      	$booking = booking::all();
    	return view('booking.list',['booking'=>$booking]);
    }

  public function getAdd() {
    	return view('booking.add');
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

        return redirect('city/add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id)
    {
    	$city = city::find($id);
        return view('city.edit',['city'=>$city]);


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
        return redirect('city/edit/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    }
    public function getXoa($id)
    {
        $city = city::find($id);
        $city->delete();
        return redirect('city/list')->with('thongbao','Bạn đã xóa thành công');
    }
    


}
