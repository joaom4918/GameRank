@extends('layout.base')

@section('title','editar nota')
    
@section('content')
    
<h1>Atualizar nota</h1>

<form action="{{route('admin.avaliacao.atualizar_nota',$registro->idav)}}" method="post">

    {{ csrf_field() }}

    <input type="hidden" name="_method" value="put"> 
    @include('admin.avaliacao.form')

    <button class="btn btn-primary">Atualizar</button>
    
</form>
@endsection