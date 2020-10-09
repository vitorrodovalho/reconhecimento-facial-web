<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unique()->unsigned();
            $table->dateTime('date_creation');
            $table->dateTime('date_started');
            $table->dateTime('date_conclusion');
            $table->integer('user_creation_id')->unsigned();
            $table->integer('user_conclusion_id')->unsigned();
            $table->integer('qty')->unsigned();
            $table->integer('status')->unsigned();
            $table->integer('control_area_id')->unsigned();
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('user_creation_id')->references('id')->on('users');
            //$table->foreign('user_conclusion_id')->references('id')->on('users');
            //$table->foreign('control_area_id')->references('id')->on('control_area');
            //$table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('inventories');
    }
}
