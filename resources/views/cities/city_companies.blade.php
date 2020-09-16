@extends('layouts.app')

@section('title', 'Empresas na cidade')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">{{$city->name}}</h3>

            <div class="mt-3 mb-2">
                <h5 class="text-right total_registros">Total de empresas: {{$total_companies}}</h5>
            </div>


            <div style="clear:both;" class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Empresas</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">Id</th>
                        <th>Empresa</th>
                    </thead>
                    <tbody>
                        @forelse ($companies as $company)
                            <tr>
                                <td class="text-center">{{$company->id}}</td>
                                <td>{{$company->name}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhuma empresa registrada nesta Cidade!</td>
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
