<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaMovimentacoes extends Migration
{
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_usuario');
            $table->dateTime('data');
            $table->foreign('cod_usuario')->references('codigo')->on('usuarios');
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimentacoes');
    }
}
