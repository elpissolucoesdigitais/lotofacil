<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteados', function (Blueprint $table) {
            $table->id();
            $table->integer('identificador')->unique();
            $table->integer('ns1');
            $table->integer('ns2');
            $table->integer('ns3');
            $table->integer('ns4');
            $table->integer('ns5');
            $table->integer('ns6');
            $table->integer('ns7');
            $table->integer('ns8');
            $table->integer('ns9');
            $table->integer('ns10');
            $table->integer('ns11');
            $table->integer('ns12');
            $table->integer('ns13');
            $table->integer('ns14');
            $table->integer('ns15');
            $table->integer('ns16');
            $table->integer('ns17');
            $table->integer('ns18');
            $table->integer('ns19');
            $table->integer('ns20');
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
        Schema::dropIfExists('sorteados');
    }
}
