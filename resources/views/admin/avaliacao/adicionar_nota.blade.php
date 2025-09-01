@extends('layout.base')

@section('title','adicionar avaliacao')
    

@section('content')
    
<h1>Adicionar Avaliação</h1>

<form action="{{route('admin.avaliacao.salvar_nota')}}" method="post">

{{ csrf_field() }}

@include('admin.avaliacao.form') 

<button class="btn btn-primary">postar</button> 
</form>
@endsection 