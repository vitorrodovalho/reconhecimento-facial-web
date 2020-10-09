<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 25);
            $table->string('pass', 25);
            $table->string('name', 100);
            $table->string('cpf')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('registration', 45)->nullable();
            $table->string('office', 45)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('cod_language')->nullable();
            $table->string('email', 300)->nullable();
            $table->integer('module')->unsigned()->nullable();
            $table->boolean('save_session')->nullable();
            //$table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('access_group_id')->unsigned()->nullable();
            $table->boolean('active');
            //$table->integer('company_id')->unsigned()->nullable();
            //$table->foreign('access_group_id')->references('id')->on('access_group');
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['code', 'company_id'], 'users_unique');
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
        Schema::dropIfExists('users');
    }
}
