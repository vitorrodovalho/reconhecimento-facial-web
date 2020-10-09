<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 45);
            $table->string('description', 150);
            $table->string('plant', 20)->nullable();
            $table->string('unity_code', 3)->nullable();
            $table->float('volume', 12)->nullable();
            $table->string('un_volume', 3)->nullable();
            $table->float('weight', 12)->nullable();
            $table->string('un_weight', 3)->nullable();
            $table->float('price', 12)->nullable();
            $table->string('ean_13', 20)->nullable();
            $table->integer('qty_washes')->unsigned()->nullable();
            $table->integer('max_washes')->unsigned()->nullable();
            $table->dateTime('date_last_washes')->nullable();
            $table->integer('max_days_no_mov')->unsigned()->nullable();
            $table->string('photo_filename', 200)->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->string('currency_id', 3)->nullable();
            //$table->integer('company_id')->unsigned();
            //$table->foreign('group_id')->references('id')->on('product_groups');
            //$table->foreign('currency_id')->references('id')->on('product_groups');
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['code', 'company_id'], 'products_unique');
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
        Schema::dropIfExists('products');
    }
}
