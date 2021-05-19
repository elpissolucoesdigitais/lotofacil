<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumeroserradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numeroserrados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jogo_id');
            $table->timestamps();
            $table->foreign('jogo_id')->references('id')->on('jogos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numeroserrados');
    }
}
