<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngredientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->bigIncrements('id_ingrediente');
            $table->unsignedBigInteger('id_receita');
            $table->string('nome_ingrediente');
            $table->string('quantidade');
            // $table->foreign('id_receita')->references('id_receita')->on('receitas');
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
        Schema::dropIfExists('ingredientes');
    }
}
