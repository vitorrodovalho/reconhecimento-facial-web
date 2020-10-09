<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpcCrossRefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epc_cross_ref', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from', 100)->unique()->nullable();
            $table->string('code_to', 100)->nullable();
            $table->string('serial_to', 20);
            $table->boolean('status')->nullable();
            //$table->integer('company_id')->nullable()->unsigned();
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
        Schema::dropIfExists('epc_cross_ref');
    }
}
