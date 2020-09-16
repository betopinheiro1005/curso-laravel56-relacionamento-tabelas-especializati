@extends('layouts.app')

@section('title', 'Listagem de municípios do Estado')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <h3 class="text-center mt-3 titulo">{{$state->name}} ({{$state->initials}}) </h3>

            <div style="display:block" class="mt-3 mb-3">
                <a href="/one-to-many/states"><button class="btn btn-primary btn-sm mt-1">Voltar</button></a>
                <h5 class="total_registros">Total de cidades: {{$total_cities}}</h5>
            </div>

            <div style="clear:both;" class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Cidades</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">Ordem</th>
                        <th class="text-center">Id</th>
                        <th>Nome da Cidade</th>
                    </thead>
                    <tbody>
                        
                        @forelse ($cities as $index => $city)
                            <tr>
                                <td class="text-center">{{$index + 1}}</td>
                                <td class="text-center">{{$city->id}}</td>
                                <td>{{$city->name}}</td>   
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhuma cidade registrado!</td>
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

