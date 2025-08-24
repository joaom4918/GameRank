<?php

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



Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('site.home');


Route::get('admin/games/adicionar_games',[GameController::class,'adicionar_games'])->name('admin.games.adicionar_games');
Route::post('admin/games/salvar_games',[GameController::class,'salvar_games'])->name('admin.games.salvar_games');
Route::get('admin/games/lista_games',[GameController::class,'lista_games'])->name('admin.games.lista_games');
Route::get('admin/games/excluir_games/{idgame}',[GameController::class,'excluir_games'])->name('admin.games.excluir_games');
Route::get('admin/games/editar_games/{idgame}',[GameController::class,'editar_games'])->name('admin.games.editar_games');
Route::put('admin/games/atualizar_games/{idgame}',[GameController::class,'atualizar_games'])->name('admin.games.atualizar_games');
require __DIR__.'/auth.php';
 