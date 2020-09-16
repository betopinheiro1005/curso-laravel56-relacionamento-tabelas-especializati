<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class OneToManyThroughController extends Controller
{
    public function index($id=31){
        $country = Country::find($id);
        $cities = $country->cities;
        $total_cities = $country->cities->count();

        return view('cities/cities_country', compact('country', 'cities', 'total_cities'));
    }
}
