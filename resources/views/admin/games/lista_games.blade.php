@extends('layout.base')

@section('title','Lista de games')

@section('content')
    
<h1>Lista de Jogos Cadastrados</h1>

<table class="table table-bordered table-striped" id="tabela-games">

    <thead>
     <th>ID</th>
     <th>TITULO</th>
     <th>ANO DE LANÇAMENTO</th>
     <th>PLATAFORMA</th>
     <th>GENERO</th>
     <th>IMAGEM</th>
     <th>OPÇÕES</th>
    </thead>
   
    <tbody>
        
            @foreach ($registros as $registro)
            <tr>
            <td> {{$registro->idgame}}  </td>
            <td> {{$registro->titulo}}  </td>
            <td> {{$registro->ano_lancamento}} </td>
            <td> {{$registro->plataforma}} </td>
            <td> {{$registro->genero}} </td>
            <td><img src="{{asset('imagens_games/'.$registro->imagem)}}" height="100" width="100"></td>
            <td><a href="{{route('admin.games.editar_games',$registro->idgame)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="javascript:void(0)" onclick="confirmar_exclusao({{$registro->idgame}})" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            
            </td>
            </tr>  

            <script>
          function confirmar_exclusao(idgame){
            confirmacao=confirm("Deseja mesmo excluir o game {{$registro->titulo}}  ?");
            if(confirmacao){
            window.location.href="/admin/games/excluir_games/"+idgame;
            }
          } 
          </script> 
            @endforeach 
    </tbody>

    
</table>


@endsection




    
