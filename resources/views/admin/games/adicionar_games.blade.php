@extends('layout.base')
@section('title,Adicionar Games')
    
@section('content') 
    <h1>Adcionar Games</h1>  
    <form action="{{route('admin.games.salvar_games')}}" method="post" enctype="multipart/form-data">
       
        {{ csrf_field() }}
        @include('admin.games.form')

    <button class="btn btn-primary"><i class="fas fa-save"> Salvar</i></button>
    </form>
@endsection