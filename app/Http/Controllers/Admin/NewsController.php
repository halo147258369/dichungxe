<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\news;
use App\Model\member;
use App\Model\vehicle;
use App\Model\company;
use App\Model\trip;
use Carbon\Carbon;

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

    public function getList1()
    {
     $member=member::count();
     $vehicle=vehicle::count();
     $company=company::count();
     // $user = User::where('id', Auth::user()->id)->first();
        // dd($user);
    
        $today = Carbon::now();
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        $numofmonth = Carbon::now()->daysInMonth;
        $preMonth = $today->subMonth(1);
        $monthpre = $preMonth->month;
        $numpreMonth = $preMonth->daysInMonth;
        $start = $year . '-' . $month . '-' .'01';
        $end = $year . '-' . $month . '-' .$numofmonth;

        $start1 = $year . '-' . '01' . '-' .'01';
        $end1 = $year . '-' . '12' . '-' . '30';

        $start2 = $year . '-' . $monthpre . '-' .'01';
        $end2 = $year . '-' . $monthpre . '-' .$numpreMonth;

        // $start3 = $year . '-' . $monthpre . '-' .'01';
        // $end3 = $year . '-' . $monthpre . '-' .$numpreMonth;

        $baidang_hstd = trip::where('day_go', '>=', $start)
        ->where('day_go', '<=', $end)
        ->count();

        $tonghstdtrongnam = trip::where('day_go', '>=', $start1)
        ->where('day_go', '<=', $end1)
        ->count();

        $hstdthangtruoc = trip::where('day_go', '>=', $start2)
        ->where('day_go', '<=', $end2)
        ->count();
      // $hstdthangtruocnua = trip::where('day_go', '>=', $start3)
      //   ->where('day_go', '<=', $end3)
      //   ->count();
        $arrbaidang_hstd = array();

        for($i = 0 ; $i <= $numofmonth; $i++)
        {
            $date = $year . '-' . $month . '-' . $i;
            $hstd1 = trip::where('day_go', '=', $date)
            ->where('day_go', '<=', $date)
            ->count();

            $obj = (object) array(
                'year'      => $year, 
                'month'     => $month,
                'day'       => $i,
                'value'     => $hstd1,
            );

        }


        // $today1 = Carbon::now();
        // $month1 = Carbon::now()->month;
        // $year1 = Carbon::now()->year;
        // $numofmonth1 = Carbon::now()->daysInMonth;
        // $preMonth1 = $today1->subMonth(1);
        // $monthpre1 = $preMonth1->month;
        // $numpreMonth1 = $preMonth1->daysInMonth;
        // $start1 = $year1 . '-' . $month1 . '-' .'01';
        // $end1 = $year1 . '-' . $month1 . '-' .$numofmonth1;

        // $start3 = $year1 . '-' . '01' . '-' .'01';
        // $end3 = $year1 . '-' . '12' . '-' . '30';

        // $start4 = $year1 . '-' . $monthpre1 . '-' .'01';
        // $end4 = $year1 . '-' . $monthpre1 . '-' .$numpreMonth1;

        // $baidang_hsxv = baidang_hsxv::where('ngay_dang_bd', '>=', $start1)
        // ->where('ngay_dang_bd', '<=', $end1)
        // ->count();

        // $tonghsxvtrongnam = baidang_hsxv::where('ngay_dang_bd', '>=', $start3)
        // ->where('ngay_dang_bd', '<=', $end3)
        // ->count();

        // $hsxvthangtruoc = baidang_hsxv::where('ngay_dang_bd', '>=', $start4)
        // ->where('ngay_dang_bd', '<=', $end4)
        // ->count();

        // $arrbaidang_hsxv = array();

        // for($i1 = 0 ; $i1 <= $numofmonth1; $i1++)
        // {
        //     $date1 = $year1 . '-' . $month1 . '-' . $i1;
        //     $hsxv3 = baidang_hsxv::where('ngay_dang_bd', '=', $date1)
        //     ->where('ngay_dang_bd', '<=', $date1)
        //     ->count();

        //     $obj = (object) array(
        //         'year1'      => $year1, 
        //         'month1'     => $month1,
        //         'day1'       => $i1,
        //         'value1'     => $hsxv3,
        //     );

        // }
        // $tong_hstd = baidang_hstd::all()->count();
        // $tong_hsxv = baidang_hsxv::all()->count();
        // $sinhvien = Sinhvien::all()->count();
        // $nhatuyendung = Nhatuyendung::all()->count();

    // print_r(json_encode($donhang));

    // return view('admin', compact('month','year', 'tong_hstd', 'baidang_hstd', 'tonghstdtrongnam', 'hstdthangtruoc', 'arrbaidang_hstd', 'tong_hsxv', 'sinhvien', 'nhatuyendung'));
    // return view('admin', compact('user','month1','year1','month','year', 'tong_hstd', 'tong_hsxv','baidang_hstd', 'tonghstdtrongnam','tonghsxvtrongnam', 'hsxvthangtruoc', 'hstdthangtruoc', 'arrbaidang_hstd', 'sinhvien', 'nhatuyendung'));
  // return view('admin/statistical/list',['member'=>$member,'vehicle'=>$vehicle,'company'=>$company]);

    



    return view('admin/statistical/list', compact('company','vehicle','member','month1','year1','month','year', 'baidang_hstd', 'tonghstdtrongnam', 'hstdthangtruoc','arrbaidang_hstd'));
}
}
