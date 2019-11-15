<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\city;
use App\Model\Trip;
use App\Model\Ward;


class SearchController extends Controller
{
  public function postSearch(Request $request){
    $from_ward = Ward::find($request->from_ward);
    $to_ward = Ward::find($request->to_ward);
    $from_place = $from_ward->places;
    $to_place = $to_ward->places;    
    $from_ids = array_column($from_place->all(), 'id');
    $to_ids = array_column($to_place->all(), 'id');
    $data['trips'] = Trip::whereIn('from_id', $from_ids)->whereIn('to_id', $to_ids)->get();
    $data['cities'] = city::all();
    return view('guest.index', $data);
  }
}