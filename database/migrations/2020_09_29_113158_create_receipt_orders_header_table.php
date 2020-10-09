<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptOrdersHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_orders_header', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 50);
            $table->dateTime('date')->nullable();
            $table->string('customer_code', 40);
            $table->string('customer_name', 120);
            $table->integer('status')->nullable()->unsigned();
            //$table->integer('company_id')->nullable()->unsigned();
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
        Schema::dropIfExists('receipt_orders_header');
    }
}
