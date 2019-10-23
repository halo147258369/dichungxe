<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Trip;

class IndexController extends Controller
{
    public function getIndex()
    {
        $data['trips'] = Trip::all();
        return view('guest.index', $data);
    }
}
