@extends('layout.base')

@section('title','Lista Avaliacao')
    
@section('content')
  <h1>Lista de notas </h1>

<table class="table table-bordered" id="tabela-notas">
    <thead>
        <th>ID</th>
        <th>GAME</th>
        <th>NOTA</th>
        <th>OPÇÕES</th>

    </thead> 

    <tbody>
        
        @foreach ($registros as $registro)

        <tr>
            <td> {{$registro->idav}} </td>
            <td> {{$registro->game->titulo ?? 'sem games'}} </td>
            <td> {{$registro->nota}} </td>
            <td> <a href="{{route('admin.avaliacao.editar_nota',$registro->idav)}}" class="btn btn-primary">editar</a>
                <a href="javascript:void(0)" onclick="confirmar_exclusao({{$registro->idav}})" class="btn btn-danger">excluir</a> 
            
            </td> 
             
        </tr>
            
        @endforeach

        <script>

                  $(document).ready(function () {
                 $('#tabela-notas').DataTable({
                   language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
               }
            });
           });
            function confirmar_exclusao(idav){
                var confirmacao=confirm("deseja mesmo excluir essa nota");
                if(confirmacao){
                    window.location.href="/admin/avaliacao/excluir_nota/"+idav
                }
            }
        </script>
    </tbody>
</table> 
@endsection 

