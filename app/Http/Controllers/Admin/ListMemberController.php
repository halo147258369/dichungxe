<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Member;
class ListMemberController extends Controller
{
   protected $model;
    protected $view_prefix;
    public function __construct(Member $model)
    {
        $this->model = $model;
        $this->view_prefix = 'admin.listMember.';
        
    }
   
    public function getList()
    {
        $data['members'] = $this->model->all();
        return view($this->view_prefix.'list', $data);
    }


      public function getEdit($id)
    {
        $data['members'] = $this->model->findOrFail($id);
        
        return view($this->view_prefix.'edit',$data);
    }
  public function postEdit($id, Request $req)
    {
        $member = $this->model->findOrFail($id);
        $data = $req->only($this->model->fillable);
        $member->update($data);
        return redirect()->route('admin.listMember.list.get')->with('status', 'Lưu thay đỔi thành công!');
    }

    public function getDelete($id)
    {
        $member = $this->model->findOrFail($id);
        $member->destroy();
        return redirect()->route('admin.member.list.get')->with('status', 'Xoá thành công!');
    }
   
}
