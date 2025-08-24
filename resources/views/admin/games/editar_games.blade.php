@extends('layout.base')

@section('title','editar games')

@section('content') 
    <h1>Editar Games</h1>
    <form action="{{route('admin.games.atualizar_games',$registro->idgame)}}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        
        <input type="hidden" name="_method" value="put">
     @include('admin.games.form')

    <button class="btn btn-primary"><i class="fas fa-save"> Atualizar</i></button>
    </form>
  
    
@endsection
    
