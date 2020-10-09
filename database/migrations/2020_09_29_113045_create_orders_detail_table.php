<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->nullable()->unsigned();
            $table->integer('line_num')->nullable()->unsigned();
            $table->integer('prod_code')->nullable()->unsigned();
            $table->string('description', 120)->nullable();
            $table->integer('qty')->nullable()->unsigned();
            $table->integer('qty_checked')->unsigned();
            $table->boolean('status');
            $table->string('note', 300);
            $table->integer('company_id')->unsigned()->nullalble();
            //$table->foreign('order_id')->references('id')->on('orders_header');
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
        Schema::dropIfExists('orders_detail');
    }
}
