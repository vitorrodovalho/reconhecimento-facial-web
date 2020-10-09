<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptOrdersDetailEpcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_orders_detail_epc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_order')->nullable()->unsigned();
            $table->integer('epc_hex')->nullable()->unsigned();
            $table->integer('epc_item_ref')->nullable()->unsigned();
            $table->integer('epc_item_serial')->nullable()->unsigned();
            $table->dateTime('date_read')->nullable();
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('num_order')->references('id')->on('receipt_orders_detail');
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
        Schema::dropIfExists('receipt_orders_detail_epc');
    }
}
