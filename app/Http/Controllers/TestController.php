<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\news;
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

	}