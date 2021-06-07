<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('concurso_id');
            $table->string('identificador_jogo')->unique();
            $table->json('numerojogado');
            $table->timestamps();
            $table->foreign('concurso_id')->references('id')->on('concursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
