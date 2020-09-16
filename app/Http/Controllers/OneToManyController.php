<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{

    public function index($id=31){
        // $states = State::all()->sortByDesc("id");

        $states = State::where('country_id', $id)->get();
        $total_states = $states->count();
        $country = Country::find($id);
        // dd($countries->pluck('id','name'));
        return view('states/index', compact('states', 'total_states', 'country'));
    }

    public function new(){
        $dataForm = [
            'name' => 'Alaska',
            'initials' => 'AK',
            'country_id' => 231 # Estados Unidos
        ];

        State::create($dataForm);

        return redirect('/one-to-many/states/231');

    }

    public function show($id){
        // Procurando dados de um Estado pelo seu id

        // $state = State::find($id); 
        $state = State::where('id', $id)->get()->first(); 

        if($state){
            $cities = $state->cities;
            $total_cities = $state->cities->count();
            return view('one-to-many/show', compact('state', 'cities', 'total_cities'));
        } else {
            $city = "<h3>Não existe Estado registrado com este id!</h3>";
            return $city;
        }
    }

    public function busca_city($name){
        // Procurando dados de um município por seu nome

        $city = City::where('name', $name)->get()->first();

        if($city){
            $state = $city->state;
            $country = $state->country;
            return view('includes/state', compact('city', 'state', 'country'));
        } else {
            $message = "<h3>Não existe município registrado com este nome!</h3>";
            return $message;
        }
    }

    public function busca_state($id){
        // Busca o país a que pertence o Estado

        $state = State::where('id', $id)->get()->first(); 

        // dd($state->name);

        if($state){
            $country = $state->country;
            return view('includes/country', compact('country', 'state'));
        } else {
            $message = "<h3>Não existe Estado registrado com este id!</h3>";
            return $message;
        }
    }

    public function states_like($string){
        $states = State::where('name', 'LIKE', "%$string%")->get();

        $total_states = $states->count();
        return view('states/states_like', compact('states', 'total_states', 'string'));
    }

    public function cities_like($string){
        $cities = City::where('name', 'LIKE', "%$string%")->with('state')->get();

        $total_cities = $cities->count();
        return view('cities/cities_like', compact('cities', 'total_cities', 'string'));
    }

}
