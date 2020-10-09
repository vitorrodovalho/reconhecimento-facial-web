<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyConversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_conversion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from', 3)->nullable();
            $table->string('to', 3)->nullable();
            $table->float('tax')->nullable();
            //$table->integer('company_id')->nullable()->unsigned();
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
        Schema::dropIfExists('currency_conversion');
    }
}
