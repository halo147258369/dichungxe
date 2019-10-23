<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\District;
use App\Model\Ward;

class AddressController extends Controller
{
    public function getDistricts($city_id)
    {
        $city = City::findOrFail($city_id);
        return $city->districts;
    }

    public function getWards($district_id)
    {
        $district = District::findOrFail($district_id);
        return $district->wards;
    }
}
