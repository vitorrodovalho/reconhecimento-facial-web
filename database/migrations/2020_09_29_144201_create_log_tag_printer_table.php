<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTagPrinterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_tag_printers', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('datetime')->nullable();
            $table->string('item_reference', 100);
            $table->integer('last_start_serial')->unsigned();
            $table->integer('last_qty')->unsigned();
            $table->integer('last_end_series')->unsigned();
            $table->integer('tag_layout_id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('log_tag_printers');
    }
}
