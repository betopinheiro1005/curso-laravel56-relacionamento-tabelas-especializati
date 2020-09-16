@extends('layouts.app')

@section('title', 'Comentários do Estado')

@section('content')

    <div class="row">
    
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <h3 class="text-center mt-3 titulo">{{$state->name}}</h3>

            <div class="mt-3 mb-2">
                <h5 class="text-right total_registros">Total de Comentários: {{$total_comments}}</h5>
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
                        @forelse ($comments as $comment)
                            <tr>
                                <td class="text-center">{{$comment->id}}</td>
                                <td>{{$comment->description}}</td>
                                <td>{{$comment->created_at}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Não há nenhum comentário registrado!</td>
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
