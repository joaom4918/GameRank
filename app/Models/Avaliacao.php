<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

       protected $primaryKey='idav'; 
       protected $table = 'avaliacoes';
       
       protected $fillable = [
        'nota',
        'comentario',
        'game_id', 
        
    ];

    public function game(){

       
        return $this->belongsTo(Game::class,'game_id','idgame');
    }


   
}
