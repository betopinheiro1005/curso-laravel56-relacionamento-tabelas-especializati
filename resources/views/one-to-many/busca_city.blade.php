@extends('layouts.app')

@section('title', 'Dados do Município')

@section('content')

<div class="row mt-3">
    
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <div class="jumbotron">
            <h1 class="display-5">{{$city->name}}</h1>
            <p class="lead"></p>
            <hr class="my-4">
            <p>País: {{$country->name}}</p>
            <p>Estado: {{$state->name}}</p>
            <p>Sigla do Estado: {{$state->initials}}</p>
            <br>
            <p class="text-right"><a class="btn btn-primary btn-sm" href="/one-to-many/states" role="button">Voltar</a></p>
        </div>

    </div>
    <div class="col-md-3"></div>

</div>

@endsection


        