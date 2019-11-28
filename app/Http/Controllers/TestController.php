<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\news;
use App\model\trip;
use DB;
class TestController extends Controller
	{


 function test()
    {
     // return view('master');

  return view('test');
    
    }
     function test1()
    {
     // return view('master');

  return view('test1');
    
    }
     function test2()
    {
     // return view('master');

  return view('test2');
    
    }
    function news()
    {
      $news = news::all();

  return view('news', ['news'=>$news]);
    
    }

    function news_type($id)
    {
      $news = news::find($id);

        return view('news_type', ['news'=>$news]);
    
    }



    public function thongke_chuyendi_theothang()
    {
        $results = DB::table('trips')
        ->select( DB::raw('month(trips.day_go) as thangdi') , DB::raw("COUNT(trips.id) as soluong"))
        ->groupBy('thangdi')
        ->get();
        //dd($results);

        $labels = $results->pluck('thangdi');
        
        $values = $results->pluck('soluong');

        return view(' admin.statistical.thongke_chuyendi_theothang')->with('labels', $labels)
        ->with('results', $results)
        ->with('values', $values);
    }


  //   function thongke_chuyendi_theothang()
  //   {
  //    // return view('master');

  // return view('testthongke');
    

  //   	}
  }