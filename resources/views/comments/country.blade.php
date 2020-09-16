@extends('layouts.app')

@section('title', 'Novo comentário do País')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">{{$country->name}}</h3>

            <div class="mt-3 mb-2">
                <p class="text-left text-success">Comentário inserido com sucesso!</p>
            </div>

            <div style="clear:both;" class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Comentários</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">Id</th>
                        <th>Comentário</th>
                        <th>Criado em:</th>
                    </thead>
                    <tbody>
                         <tr>
                             <td class="text-center">{{$comment->id}}</td>
                             <td>{{$comment->description}}</td>
                             <td>{{$comment->created_at}}</td>
                         </tr>
                    </tbody>
                </table>
            </div>    
            <br>
        </div>
        <div class="col-md-3"></div>
    
    </div>

  @endsection
