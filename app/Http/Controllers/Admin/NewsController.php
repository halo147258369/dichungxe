<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\news;
class NewsController extends Controller
{
   protected $model;
    protected $view_prefix;
    public function __construct(news $model)
    {
        $this->model = $model;
        $this->view_prefix = 'admin.new.';
        
    }
   
   
    public function getList()
    {
       
        $data['news'] = $this->model->all();
        return view($this->view_prefix.'list', $data);
    }

    public function getAdd()
    {
     
        return view($this->view_prefix.'add');
    }

     public function postAdd(Request $req)
    {
        $news = new news;
        $news->title=$req->title;
        $news->summary=$req->summary;
        $news->content=$req->content;
      
        // $data['name']= $req->name;
        // $data['from_id'] = $req->ward_id[0];
        // $data['to_id'] = $req->ward_id[1];


        if($req->hasFile('image'))
        {
           
            $file = $req->file('image');
            $duoi = $file->getClientOriginalExtension();

            if ($duoi !='jpg' && $duoi != 'png' && $duoi != 'gif')
            {
                return redirect('admin/news/add')->with('loi','Không phải file hình');
            }

            $name = $file->getClientOriginalName();

            $image = str_random(4)."_".$name;
           while (file_exists("upload/news/".$image)) {
               # code...
                 $image = str_random(4)."_".$name;
           }
           $file->move("upload/news",$image);
        $news->image = $image;
        }
        else
        {
            $news->image="";
        }
         $news->save();

 
        return redirect()->route('admin.news.list.get')->with('status', 'Thêm tuyến bus thành công!');
    }
public function getEdit($id)
    {
        $news = news::find($id);
        return view('admin.new.edit',['news'=>$news]);
    }
     public function postEdit(Request $request,$id)
    {
        $news =news::find($id);
        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->content = $request->content;
        
        if($request->hasFile('image'))
        {
           
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();

            if ($duoi !='jpg' && $duoi != 'png' && $duoi != 'gif')
            {
                return redirect('admin/news/add')->with('loi','Không phải file hình');
            }

            $name = $file->getClientOriginalName();

            $image = str_random(4)."_".$name;
           while (file_exists("upload/news/".$image)) {
               # code...
                 $image = str_random(4)."_".$name;
           }

           $file->move("upload/news",$image);
          
           $news->image = $image;
        }
        else
        {
            $news->image="";
        }
        $news->update();

        return redirect('admin/news')->with('thongbao','Sửa loại sản phẩm thành công');
    }

    // public function getEdit($id)
    // {
    //     $data['city'] = $this->model->findOrFail($id);
        
    //     return view($this->view_prefix.'edit',$data);
    // }

    // public function postEdit($id, Request $req)
    // {
    //     $city = $this->model->findOrFail($id);
    //     $data = $req->only($this->model->fillable);
    //     $city->update($data);
    //     return redirect()->route('admin.city.list.get')->with('status', 'Lưu thay đỔi thành công!');
    // }

    // public function getDelete($id)
    // {
    //     $city = $this->model->findOrFail($id);
    //     $city->destroy();
    //     return redirect()->route('admin.city.list.get')->with('status', 'Xoá thành công!');
    // }
}

