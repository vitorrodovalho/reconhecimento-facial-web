<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 45);
            $table->string('description', 50);
            //$table->integer('company_id')->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['code', 'description', 'company_id'], 'access_group_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_group');
    }
}
