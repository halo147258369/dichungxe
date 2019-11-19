<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\company;
class CompaniesController extends Controller
{
    protected $model;
    protected $view_prefix;
    public function __construct(Company $model)
    {
        $this->model = $model;
        $this->view_prefix = 'admin.company.';
        
    }
   
    public function getList()
    {
        $data['companies'] = $this->model->all();
        return view($this->view_prefix.'list', $data);
    }

    public function getAdd()
    {
     
        return view($this->view_prefix.'add');
    }

    public function postAdd(Request $req)
    {
        $data = $req->only($this->model->fillable);//only lọc 
        $company = $this->model->insert($data);
        return redirect()->route('admin.company.list.get')->with('status', 'Thêm Công ty thành công!');
    }

    public function getEdit($id)
    {
        $data['company'] = $this->model->findOrFail($id);
        
        return view($this->view_prefix.'edit',$data);
    }

    public function postEdit($id, Request $req)
    {
        $company = $this->model->findOrFail($id);
        $data = $req->only($this->model->fillable);
        $company->update($data);
        return redirect()->route('admin.company.list.get')->with('status', 'Lưu thay đỔi thành công!');
    }

    public function getDelete($id)
    {
        $company = $this->model->findOrFail($id);
        $company->destroy();
        return redirect()->route('admin.company.list.get')->with('status', 'Xoá thành công!');
    }
    
}
