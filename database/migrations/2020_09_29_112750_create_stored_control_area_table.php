<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoredControlAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_area_stored', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('control_area_id')->unsigned();
            $table->string('epc_hex', 200);
            $table->string('epc_item_ref', 200)->nullable();
            $table->string('epc_item_series', 30)->nullable();
            $table->string('type_stored', 2)->nullable();
            $table->string('responsible', 300)->nullable();
            $table->string('comments', 1000)->nullable();
            $table->integer('reader_antenna')->nullable()->unsigned();
            $table->integer('reader_id')->nullable()->unsigned();
            //$table->integer('company_id')->unsigned()->nullable();
            //$table->foreign('control_area_id')->references('id')->on('control_area');
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->foreign('reader_id')->references('id')->on('readers');
            //$table->index(['control_area_id', 'epc_hex', 'epc_item_ref', 'epc_item_series', 'company_id'], 'stored_control_area_unique');
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
        Schema::dropIfExists('control_area_stored');
    }
}
