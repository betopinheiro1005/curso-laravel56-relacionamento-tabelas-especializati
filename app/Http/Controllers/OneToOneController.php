<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function index(){
        $countries = Country::all()->sortByDesc("id");
        // dd($countries->pluck('id','name'));
        $total_countries = Country::all()->count();
        return view('countries/index', compact('countries','total_countries'));
    }
    
    public function show($id){
        // Procurando dados de um país pelo seu id

        // $country = Country::find($id); 
        $country = Country::where('id', $id)->get()->first(); 

        if($country){
            $location = $country->location;
            return view('includes/location', compact('country', 'location'));
        } else {
            $location = "<h3>Não existe país registrado com este id!</h3>";
            return $location;
        }
    }

    public function new(){
        $dataCountry = [
            'name' => 'Zimbábue'
        ];

        $country = Country::create($dataCountry);

        $dataLocation = [
            'latitude' => -19.015438,
            'longitude' => 29.154857
        ];
        
        $location = new Location;
        $location->country_id = $country->id;
        $location->latitude = $dataLocation['latitude'];
        $location->longitude = $dataLocation['longitude'];

        $location->save();

        return redirect('/one-to-one/countries');
    }

    public function busca_country($name){
        // Procurando dados de um país por seu nome

        $country = Country::where('name', $name)->get()->first();

        if($country){
            $location = $country->location;
            return view('includes/location', compact('country', 'location'));
        } else {
            $location = "<h3>Não existe país registrado com este nome!</h3>";
            return $location;
        }
    }

    public function busca_latitude($latitude){

        $location = Location::where('latitude', $latitude)->get()->first();        

        if($location){
            $country = $location->country;
            return view('includes/location', compact('country', 'location'));
        } else {
            $country = "<h3>Não encontrado país com esta latitude!!</h3>";
            return $country;
        }
    }

    public function busca_longitude($longitude){
        $location = Location::where('longitude', $longitude)->get()->first();        

        if($location){
            $country = $location->country;
            return view('includes/location', compact('country', 'location'));
        } else {
            $country = "<h3>Não encontrado país com esta longitude!!</h3>";
            return $country;
        }
    }

}
