<?php

use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\AvalicaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/', [HomeController::class, 'index'])->name('site.home');


Route::get('admin/games/adicionar_games',[GameController::class,'adicionar_games'])->name('admin.games.adicionar_games');
Route::post('admin/games/salvar_games',[GameController::class,'salvar_games'])->name('admin.games.salvar_games');
Route::get('admin/games/lista_games',[GameController::class,'lista_games'])->name('admin.games.lista_games');
Route::get('admin/games/excluir_games/{idgame}',[GameController::class,'excluir_games'])->name('admin.games.excluir_games');
Route::get('admin/games/editar_games/{idgame}',[GameController::class,'editar_games'])->name('admin.games.editar_games');
Route::put('admin/games/atualizar_games/{idgame}',[GameController::class,'atualizar_games'])->name('admin.games.atualizar_games');


Route::get('admin/avaliacao/adicionar_nota',[AvaliacaoController::class,'adicionar_nota'])->name('admin.avaliacao.adicionar_nota');
Route::post('admin/avaliacao/salvar_nota',[AvaliacaoController::class,'salvar_nota'])->name('admin.avaliacao.salvar_nota');
Route::get('admin/avaliacao/lista_notas',[AvaliacaoController::class,'lista_notas'])->name('admin.avaliacao.lista_notas');
Route::get('admin/avaliacao/editar_nota/{idav}',[AvaliacaoController::class,'editar_nota'])->name('admin.avaliacao.editar_nota'); 
Route::put('admin/avaliacao/atualizar_nota/{idav}',[AvaliacaoController::class,'atualizar_nota'])->name('admin.avaliacao.atualizar_nota'); 
Route::get('admin/avaliacao/excluir_nota/{idav}',[AvaliacaoController::class,'excluir_nota'])->name('admin.avaliacao.excluir_nota'); 
Route::get('admin/avaliacao/detalhes_nota/{idav}',[AvaliacaoController::class,'detalhes_nota'])->name('admin.avaliacao.detalhes_nota'); 
require __DIR__.'/auth.php';
 