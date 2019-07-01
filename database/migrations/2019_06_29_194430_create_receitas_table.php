<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->bigIncrements('id_receita');
            $table->unsignedBigInteger('id_user');
            $table->string('titulo');
            $table->string('modo_de_preparo');
            $table->integer('categoria');
            // $table->foreign('id_ingredientes')->references('id_ingrediente')->on('ingrediente');
            // $table->foreign('id_user')->references('user')->on('id');
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
        Schema::dropIfExists('receitas');
    }
}
