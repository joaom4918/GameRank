<body>
   <nav class="navbar navbar-expand-lg bg-primary"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Game Rank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('site.home')}}"><i class="fas fa-home"> Pagina inicial</i></a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.games.adicionar_games')}}"><i class="fas fa-plus"> Adicionar Games</i></a>
        </li> 
          <li class="nav-item">
          <a class="nav-link" href="{{route('admin.games.lista_games')}}"><i class="fas fa-gamepad"> Lista de Jogos</i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fas fa-user"> {{Auth::user()->name}} </i>

          </a>
          <ul class="dropdown-menu">
          
                <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Sair') }}
                </button>
            </form> 
            </a></li>
          </ul>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>