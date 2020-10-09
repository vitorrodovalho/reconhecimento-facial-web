<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer', 200);
            $table->string('model', 150);
            $table->ipAddress('ip');
            $table->ipAddress('net_mask');
            $table->integer('rem_port')->unsigned();
            $table->boolean('status')->nullable();
            $table->integer('company_id')->nullable()->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['ip', 'company_id'], 'printers_unique');
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
        Schema::dropIfExists('printers');
    }
}
