<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_header', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 50)->nullable();
            $table->dateTime('date')->nullable();
            $table->string('customer_code', 40);
            $table->string('customer_name', 120);
            $table->integer('status')->nullable()->unsigned();
            $table->integer('company_id')->unsigned()->nullable();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['number', 'company_id'], 'orders_header_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_header');
    }
}
