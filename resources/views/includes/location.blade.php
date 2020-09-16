@extends('layouts.app')

@section('title', 'Dados de localização do país')

@section('content')

<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">{{$country->name}}</h3>

        <h4 class="text-center" style="margin: 25px auto; display: block; color:brown; text-transform: uppercase">Coordenadas</h4>

        <table class="table table-striped">
            <thead>
                <th class="text-center">Id</th>
                <th>País</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{{$country->id}}</td>
                    <td>{{$country->name}}</td>
                    <td>{{$location->latitude}}</td>
                    <td>{{$location->longitude}}</td>
                </tr>
            </tbody>
        </table>        

        <p><a href="/one-to-one/countries">Voltar</a></p>

    </div>
    <div class="col-md-3"></div>    

</div>

@endsection


