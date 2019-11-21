<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Busroute;
use App\Model\Company;
use App\Model\City;
use App\Model\Vehicle;
use App\Model\Place;
use App\Model\ward;
use App\Model\district;
use Auth;


class BusroutesController extends Controller
{
    protected $model;
    public function __construct(Busroute $model)
    {
        $this->model = $model;
    }
    public function getList()
    {
        $data['busroutes'] = $this->model->all();
        return view('admin.bus.list', $data);
    }

    public function getAdd()
    {
        $data['cities'] = city::all();

        $data['wards'] = ward::all();

        return view('admin.bus.add', $data);
    }
    public function postAdd(Request $req)
    {
        $busroute = new Busroute;
        $busroute->name = $req->name;
        $busroute->from_id = $req->ward_id[0];
        $busroute->to_id = $req->ward_id[1];
        // $data['name']= $req->name;
        // $data['from_id'] = $req->ward_id[0];
        // $data['to_id'] = $req->ward_id[1];


        if ($req->hasFile('image')) {

            $file = $req->file('image');
            $duoi = $file->getClientOriginalExtension();

            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'gif') {
                return redirect('admin/busroutes/add')->with('loi', 'Không phải file hình');
            }

            $name = $file->getClientOriginalName();

            $image = str_random(4) . "_" . $name;
            while (file_exists("upload/Vehicle/" . $image)) {
                $image = str_random(4) . "_" . $name;
            }
            $file->move("upload/Vehicle", $image);
            $busroute->image = $image;
        } else {
            $busroute->image = $image;
        }
        $busroute->save();

        return redirect()->route('admin.busroute.list.get')->with('status', 'Thêm tuyến bus thành công!');
    }

    public function getEdit($id)
    {
        $busroute = busroute::find($id);
        return view('admin.bus.edit', ['busroute' => $busroute]);
    }
    public function postEdit(Request $req, $id)
    {
        //      $busroute = new Busroute;

        // //      $busroute->save();
        $busroute = $this->model->findOrFail($id);

        $data = $req->only($this->model->fillable);
        $busroute->update($data);
        return redirect()->route('admin.busroute.list.get')->with('status', 'Lưu thay đỔi thành công!');
    }
}
