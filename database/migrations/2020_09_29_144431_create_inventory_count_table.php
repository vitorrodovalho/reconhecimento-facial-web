<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryCountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_count', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventory_id')->unsigned();
            $table->integer('number')->unsigned();
            $table->dateTime('date_read');
            $table->string('epc_hex', 45);
            $table->integer('user_created')->unsigned();
            $table->integer('reader_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->string('product_code', 200);
            $table->string('product_series', 100);
            $table->string('type_epc', 45);
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->foreign('inventory_id')->references('id')->on('inventories');
            //$table->foreign('reader_id')->references('id')->on('readers');
            ///$table->index(['inventory_id', 'epc_hex'], 'inventory_count_unique');
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
        Schema::dropIfExists('inventory_count');
    }
}
