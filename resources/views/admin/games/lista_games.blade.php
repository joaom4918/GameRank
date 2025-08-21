@extends('layout.base')

@section('title','Lista de games')

@section('content')
    
<h1>Lista de Jogos Cadastrados</h1>

<table class="table table-bordered table-striped">

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
            <td><a href="#" class="btn btn-primary">editar</a>
                <a href="#" class="btn btn-danger">excluir</a>
            
            </td>
              </tr>  
            @endforeach
        
    </tbody>

</table>

@endsection




    
