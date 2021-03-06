@extends('layouts.app')

@section('title', 'Busca de Estados por string')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">Estados com string "{{$string}}" no nome</h3>

            <div class="mt-3 mb-2">
                <h5 class="text-right total_registros">Total de Estados: {{$total_states}}</h5>
            </div>


            <div style="clear:both;" class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Estados (UF)</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">Id</th>
                        <th>Nome do Estado</th>
                        <th>Informações</th>
                    </thead>
                    <tbody>
                        @forelse ($states as $state)
                            <tr>
                                <td class="text-center">{{$state->id}}</td>
                                <td>{{$state->name}}</td>   
                                <td><a href="/one-to-many/state/{{$state->id}}">Municípios</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhum Estado registrado com esta string!</td>
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
