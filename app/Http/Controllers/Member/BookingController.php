<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\city;
use App\Model\booking;
class BookingController extends Controller
{
    protected $model;

    public function __construct(booking $model)
    {
        $this->model = $model;
    }

    public function getList() {
      	$data['booking'] = $this->model->all();
    	return view('member.booking.list', $data);
    }

    public function getBooking($id)
    {
        $data['booking']= $this->model->find($id);
        return view('member.booking.detail',$data );
    }


    public function getAdd() {
    	return view('booking.add');
    }

    public function postAdd(Request $request)
    {
        $data = $request->only($this->model->fillable);
        $book = $this->model->create($data);
        return $book;
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

    public function getDelete($id)
    {
        $city = city::find($id);
        $city->delete();
        return redirect('city/list')->with('thongbao','Bạn đã xóa thành công');
    }
    


}
