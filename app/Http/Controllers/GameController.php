<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function adicionar_games()
    {


        return view("admin.games.adicionar_games");
    }

    public function salvar_games(Request $req)
    {

        $dados = $req->all();

        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $imagem_nome = time() . '-' . $imagem->getClientOriginalExtension();
            $imagem->move(public_path('imagens_games'), $imagem_nome);
            $dados['imagem'] = $imagem_nome;
        }

        #  // Converte o array de generos em string separada por vírgula
        if (isset($dados['genero']) && is_array($dados['genero'])) {
            $dados['genero'] = implode(',', $dados['genero']);
        }

        if(isset($dados['plataforma']) && is_array($dados['plataforma'])){

            $dados['plataforma']=implode(',',$dados['plataforma']);
        }
        Game::create($dados);

        return redirect()->route("site.home");
    }

    public function lista_games(){
        $registros=Game::all(); 
        return view("admin.games.lista_games",compact('registros'));
    }
}
