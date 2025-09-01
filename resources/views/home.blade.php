@extends('layout.base')

@section('title','Pagina inicial')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" 
            class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('imagens_games/mario_fase.jpg')}}" class="d-block w-100" width="300" height="300">
    </div>
    <div class="carousel-item">
      <img src="{{asset('imagens_games/crash_fase.jpg')}}" class="d-block w-100" width="300" height="300">
    </div>
    <div class="carousel-item">
      <img src="{{asset('imagens_games/gears_of_war.jpg')}}" class="d-block w-100" width="300" height="300">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row g-3 mt-4"> {{-- g-3 = espaçamento entre colunas --}}
  @foreach ($registros as $registro)
    <div class="col-md-3">
      <div class="card h-100">
        <img src="{{ asset('imagens_games/'.$registro->imagem) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $registro->titulo }}</h5>
          <p class="card-text">Ano de Lançamento: {{ $registro->ano_lancamento }}</p>
          <p class="card-text">Gênero: {{ $registro->genero }}</p>
          <p class="card-text">Plataforma: {{ $registro->plataforma }}</p> 
          <a href="{{route('admin.avaliacao.detalhes_nota',$registro->idgame)}}" class="btn btn-primary"><i class="fas fa-search"> Mais Detalhes</i></a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
