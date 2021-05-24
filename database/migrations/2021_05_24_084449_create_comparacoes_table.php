<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComparacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comparacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('concursos_id');
            $table->unsignedBigInteger('jogos_id');

            $table->foreign('concursos_id')->references('id')->on('concursos');
            $table->foreign('jogos_id')->references('id')->on('jogos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comparacoes');
    }
}
