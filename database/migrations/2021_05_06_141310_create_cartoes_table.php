<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartoes', function (Blueprint $table) {
            $table->id();
            $table->integer('identificador');
            $table->integer('nj1');
            $table->integer('nj2');
            $table->integer('nj3');
            $table->integer('nj4');
            $table->integer('nj5');
            $table->integer('nj6');
            $table->integer('nj7');
            $table->integer('nj8');
            $table->integer('nj9');
            $table->integer('nj10');
            $table->integer('nj11');
            $table->integer('nj12');
            $table->integer('nj13');
            $table->integer('nj14');
            $table->integer('nj15');
            $table->integer('nj16');
            $table->integer('nj17');
            $table->integer('nj18');
            $table->integer('nj19');
            $table->integer('nj20');
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
        Schema::dropIfExists('cartoes');
    }
}
