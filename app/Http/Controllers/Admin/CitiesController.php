<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\city;
class CitiesController extends Controller
{
   protected $model;
    protected $view_prefix;
    public function __construct(City $model)
    {
        $this->model = $model;
        $this->view_prefix = 'admin.city.';
        
    }
   
    public function getList()
    {
        $data['cities'] = $this->model->all();
        return view($this->view_prefix.'list', $data);
    }

    public function getAdd()
    {
     
        return view($this->view_prefix.'add');
    }

    public function postAdd(Request $req)
    {
        $data = $req->only($this->model->fillable);//only lọc 
        $city = $this->model->insert($data);
        return redirect()->route('admin.city.list.get')->with('status', 'Thêm phương tiện thành công!');
    }

    public function getEdit($id)
    {
        $data['city'] = $this->model->findOrFail($id);
        
        return view($this->view_prefix.'edit',$data);
    }

    public function postEdit($id, Request $req)
    {
        $city = $this->model->findOrFail($id);
        $data = $req->only($this->model->fillable);
        $city->update($data);
        return redirect()->route('admin.city.list.get')->with('status', 'Lưu thay đỔi thành công!');
    }

    public function getDelete($id)
    {
        $city = $this->model->findOrFail($id);
        $city->destroy();
        return redirect()->route('admin.city.list.get')->with('status', 'Xoá thành công!');
    }
}

