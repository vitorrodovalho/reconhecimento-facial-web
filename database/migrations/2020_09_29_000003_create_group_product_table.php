<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 45);
            $table->string('description', 50);
            $table->string('scheme', 50)->nullable();
            $table->string('epc_filter', 50)->nullable();
            //$table->integer('company_id')->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['code', 'company_id'], 'product_group_unique');
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
        Schema::dropIfExists('product_groups');
    }
}
