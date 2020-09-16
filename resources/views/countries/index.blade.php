@extends('layouts.app')

@section('title', 'Listagem de países')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="mt-3 mb-2">
                {{-- <button type="submit" class="btn btn-primary">Cadastrar</button> --}}
                {{-- <h5 style="display:inline; float:right">Total de países: {{$total_countries}}</h5> --}}
                <h5 class="text-right total_registros">Total de países: {{$total_countries}}</h5>
            </div>


            <div style="clear:both" class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Países</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">Id</th>
                        <th>Nome do país</th>
                        <th>Informações</th>
                    </thead>
                    <tbody>
                        @forelse ($countries as $country)
                            <tr>
                                <td class="text-center">{{$country->id}}</td>
                                <td>{{$country->name}}</td>   
                                <td><a href="/one-to-one/country/{{$country->id}}">Coordenadas</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhum país registrado!</td>
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

