<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 100);
            $table->string('description', 300);
            $table->string('zpl_code', 4000);
            $table->boolean('status')->nullable();
            $table->integer('printer_id')->unsigned();
            //$table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('printer_id')->references('id')->on('printers');
            //$table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('labels');
    }
}
