<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\company;
class CompanyController extends Controller
{
    public function getList() {
        $company = company::all();
    	return view('company.list',['company'=>$company]);
    }


    public function getAdd() {
    	return view('company.add');
    }
     public function postAdd(Request $request)
    {
        
        
        $this->validate($request,
            [
               
            ],
            [
                
            ]);
        $company = new company;
        $company->name= $request->name;
        $company->save();

        return redirect('company.add')->with('thongbao','Thêm thành công');
    }
    public function getEdit($id)
    {
    	$company = company::find($id);
        return view('company.edit',['company'=>$company]);


    }
    public function postEdit(Request $request,$id)
    {
        $company =company::find($id);
        $this->validate($request,
            [
                'name' => 'required|unique:congty,ten'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên thể loại',
                'name.required'=>'Tên Công ty đã tồn tại',
            ]);
        $company->ten =$request->name;
        
      $company->save();
        return redirect('company/edit/'.$id)->with('thongbao','Bạn đã cập nhật thành công');
    }
    public function getXoa($id)
    {
        $company = company::find($id);
        $company->delete();
        return redirect('company/list')->with('thongbao','Bạn đã xóa thành công');
    }
    
}
