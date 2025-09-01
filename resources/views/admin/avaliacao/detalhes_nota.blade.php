@extends('layout.base')

@section('title','Detalhes da Nota')
    
@section('content')

<div class="container mt-4">

    <h1 class="mb-4 text-center">Detalhes da Avaliação</h1>

    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row g-0">
            
            {{-- Imagem do jogo --}}
            <div class="col-md-4 text-center">
                <img src="{{ asset('imagens_games/'.$registro->imagem) }}" 
                     class="img-fluid rounded" 
                     alt="{{ $registro->titulo }}" 
                     style="max-height: 250px; object-fit: cover;">
            </div>

            {{-- Informações principais --}}
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $registro->titulo }}</h3>
                    <p class="card-text">
                        <strong>Nota:</strong> {{ $registro->nota ?? 'Sem nota atribuída' }}
                    </p>
                    <p class="card-text">
                        <strong>Comentário:</strong> 
                        {{ $registro->comentario ?? 'Nenhum comentário disponível.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Seção de comentários adicionais --}}
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            Comentários dos usuários
        </div>
        <div class="card-body">
            @if(isset($registro->comentario) && $registro->comentario != '')
                <p class="mb-0">{{ $registro->comentario }}</p>
            @else
                <p class="text-muted">Ainda não há comentários para este jogo.</p>
            @endif
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('admin.avaliacao.lista_notas') }}" class="btn btn-outline-secondary">
            Voltar para lista
        </a>
    </div>
</div>

@endsection
