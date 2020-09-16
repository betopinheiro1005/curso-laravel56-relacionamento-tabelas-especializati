@extends('layouts.app')

@section('title', 'Cidades em que a empresa existe')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">{{$company->name}}</h3>

            <div class="mt-3 mb-2">
                <h5 class="text-right total_registros">Total de cidades: {{$total_cities}}</h5>
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
                        <th>País</th>
                    </thead>
                    <tbody>
                        @forelse ($cities as $city)
                            <tr>
                                <td class="text-center">{{$city->id}}</td>
                                <td>{{$city->name}}</td>
                                <td>{{$city->state->name}} - {{$city->state->initials}}</td>
                                <td>{{$city->state->country->name}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhuma cidade em que a empresa está registrada!</td>
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
