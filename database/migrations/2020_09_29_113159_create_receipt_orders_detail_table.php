<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptOrdersDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_orders_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->nullable()->unsigned();
            $table->integer('line_num')->nullable()->unsigned();
            $table->integer('prod_code')->nullable()->unsigned();
            $table->string('description', 120)->nullable();
            $table->integer('qty')->nullable()->unsigned();
            $table->integer('checked')->unsigned();
            $table->boolean('status');
            $table->string('note', 300);
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('order_id')->references('id')->on('receipt_orders_header');
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
        Schema::dropIfExists('receipt_orders_detail');
    }
}
