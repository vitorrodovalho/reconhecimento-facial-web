<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 200)->nullable();
            $table->string('screen', 45)->nullable();
            $table->boolean('insert');
            $table->boolean('edit');
            $table->boolean('view');
            $table->boolean('delete');
            $table->boolean('export');
            $table->boolean('print');
            $table->integer('access_group_id')->nullable()->unsigned();
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('access_group_id')->references('id')->on('access_group');
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['id', 'company_id'], 'access_roles_unique');
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
        Schema::dropIfExists('access_roles');
    }
}
