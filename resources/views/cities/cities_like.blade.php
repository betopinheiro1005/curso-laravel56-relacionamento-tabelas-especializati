@extends('layouts.app')

@section('title', 'Lista de Cidades com uma string no nome')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">Cidades com string "{{$string}}" no nome</h3>

            <div class="mt-3 mb-2">
                <h5 class="text-right total_registros">Total de Cidades: {{$total_cities}}</h5>
            </div>


            <div style="clear:both;" class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Cidades</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">Id</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        @forelse ($cities as $city)
                            <tr>
                                <td class="text-center">{{$city->id}}</td>
                                <td>{{$city->name}}</td>
                                <td>{{$city->state->name}} - {{$city->state->initials}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhuma cidade registrada com esta string!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>    
            <br>
        </div>
        <div class="col-md-3"></div>
    
    </div>



  @endsection
