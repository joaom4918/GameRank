<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $primaryKey="idgame";
    use HasFactory;

       protected $fillable = [
        'titulo',
        'ano_lancamento',
        'plataforma',
        'genero',
        'imagem',
    ];
}
