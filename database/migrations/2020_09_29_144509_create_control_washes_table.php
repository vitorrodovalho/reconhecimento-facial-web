<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlWashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_washes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('epc', 50);
            $table->string('item_ref', 50);
            $table->string('item_series', 50);
            $table->dateTime('last_record');
            $table->integer('qty')->unsigned();
            $table->string('item_company_prefix', 20);
            //$table->integer('company_id')->unsigned()->nullalble();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['epc', 'last_record', 'company_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_washes');
    }
}
