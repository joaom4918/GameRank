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

        if (isset($dados['plataforma']) && is_array($dados['plataforma'])) {

            $dados['plataforma'] = implode(',', $dados['plataforma']);
        }
        Game::create($dados);

        return redirect()->route("site.home");
    }

    public function lista_games()
    {
        $registros = Game::all();
        return view("admin.games.lista_games", compact('registros'));
    }

    public function excluir_games(Request $req, $idgame)
    {
        $dados = $req->all();

        $game = Game::find($idgame);

        if ($game) {
            // Se existir imagem associada e o arquivo existir

            ##O unlink() no PHP é a função que remove arquivos do sistema (apaga do disco).
            if ($game->imagem && file_exists(public_path('imagens_games/' . $game->imagem))) {
                unlink(public_path('imagens_games/' . $game->imagem));
            }
        }
        $game->delete($dados);
        return redirect()->route("site.home");
    }

    public function editar_games($idgame)
    {

        $registro = Game::find($idgame);
        return view("admin.games.editar_games", compact('registro'));
    }

    public function atualizar_games(Request $req, $idgame)
    {
        $dados = $req->all();
        $game= Game::find($idgame);
        if(!$game){
            return redirect()->route('site.home')->with('error', 'Game não encontrado!');
        }
        if ($req->hasFile('imagem')) {

            if($game->imagen && file_exists(public_path('imagens_games/'.$game->imagem))){

                unlink(public_path('imagens_games/'.$game->imagem));
            }
            $imagem = $req->file('imagem');
            $imagem_nome = time() . '.' . $imagem->getClientOriginalExtension();
            $imagem->move(public_path('imagens_games'), $imagem_nome);
            $dados['imagem'] = $imagem_nome;
        }
       $game->update($dados);
        return redirect()->route('site.home');
    }
}
