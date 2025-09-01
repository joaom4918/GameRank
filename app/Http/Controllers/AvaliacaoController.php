<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Game;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    

    public function adicionar_nota(){

        $games=Game::all();
        return view("admin.avaliacao.adicionar_nota",compact('games'));
    }

    public function salvar_nota(Request $req){

        $dados=$req->all();
        Avaliacao::create($dados);
        return redirect()->route('site.home');
    }

    public function lista_notas(){ 
        $registros= Avaliacao::with('game')->get();
        return view("admin.avaliacao.lista_notas",compact('registros'));
    }

    public function editar_nota($idav){

        $games=Game::all(); 
        $registro= Avaliacao::find($idav);
        return view("admin.avaliacao.editar_nota",compact('registro','games'));
    }

    public function atualizar_nota (Request $req,$idav){
        $dados=$req->all();
        Avaliacao::find($idav)->update($dados);
        return redirect()->route('site.home');
    }

    public function excluir_nota(Request $req,$idav){

        $dados=$req->all();

        Avaliacao::find($idav)->delete($dados);

        return redirect()->route('site.home');

    }

    public function detalhes_nota($idgame){

        $registro=Game::find($idgame); 
        return view("admin.avaliacao.detalhes_nota",compact('registro'));
    }


}
