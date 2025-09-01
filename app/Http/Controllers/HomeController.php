<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $registros=Game::all();
        return view("home",compact('registros'));
    }
}
