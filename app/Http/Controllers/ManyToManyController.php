<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function index($name="São Paulo"){
        $city = City::where('name', $name)->get()->first();
        $companies = $city->companies;
        $total_companies = $companies->count();
        return view('cities/city_companies', compact('companies', 'total_companies', 'city'));
    }

    public function busca_company($name="3M"){
        $company = Company::where('name', $name)->get()->first();
        $cities = $company->cities;
        $total_cities = $cities->count();
        return view('companies/company_cities', compact('cities', 'total_cities', 'company'));
    }

    // Cadastra a empresa Carrefour em algumas cidades
    public function new(){
        $dataForm = [5270,1630,3645,2976,977]; // Cidades a serem inseridas (Petrópolis, Londrina, Goiânia)
        $company = Company::find(2); // Carrefour

        // $cities = $company->cities()->attach($dataForm);
        $cities = $company->cities()->sync($dataForm);

        $cities = $company->cities;
        $total_cities = $cities->count();
        return view('companies/company_cities', compact('cities', 'total_cities', 'company'));
    }

    public function delete(){

        $dataForm2 = [3645,2976,977]; // Cidades a serem excluídas (Petrópolis, Londrina, Goiânia)
        $company = Company::find(2); // Carrefour

        $cities = $company->cities()->detach($dataForm2);

        $cities = $company->cities;
        $total_cities = $cities->count();
        return view('companies/company_cities', compact('cities', 'total_cities', 'company'));
    }
}
