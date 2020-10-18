<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaUsuarios extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->integer('codigo')->unique();
            $table->string('foto', 200)->nullable();
            $table->string('cargo', 100)->nullable();
            $table->integer('id_departamento');
            //$table->foreign('id_departamento')->references('id')->on('departamentos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
