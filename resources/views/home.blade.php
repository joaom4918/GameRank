@extends('layout.base')

@section('title','Pagina inicial')

@section('content')
<div class="row g-3"> {{-- g-3 = espaçamento entre colunas --}}
  @foreach ($registros as $registro)
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('imagens_games/'.$registro->imagem) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $registro->titulo }}</h5>
          <p class="card-text">Ano de Lançamento: {{ $registro->ano_lancamento }}</p>
          <p class="card-text">Gênero: {{ $registro->genero }}</p>
          <p class="card-text">Plataforma: {{ $registro->plataforma }}</p>
          <a href="#" class="btn btn-primary"><i class="fas fa-search"> Mais Detalhes</i></a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
