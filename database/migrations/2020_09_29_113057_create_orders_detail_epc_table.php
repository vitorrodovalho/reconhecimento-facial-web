<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersDetailEpcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_detail_epc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_order')->nullable()->unsigned();
            $table->integer('epc_hex')->nullable()->unsigned();
            $table->integer('item_ref')->nullable()->unsigned();
            $table->integer('item_serial')->nullable()->unsigned();
            $table->dateTime('date_read')->nullable();
            $table->integer('company_id')->unsigned()->nullalble();
            //$table->foreign('num_order')->references('id')->on('orders_detail');
            //$table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_detail_epc');
    }
}
