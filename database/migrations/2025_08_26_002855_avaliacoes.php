<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Avaliacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id("idav");
            $table->unsignedBigInteger('game_id');
            $table->float('nota');
            $table->text('comentario');
            $table->foreign('game_id')->references('idgame')->on('games')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
