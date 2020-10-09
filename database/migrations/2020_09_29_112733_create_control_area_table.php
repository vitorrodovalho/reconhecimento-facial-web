<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 20);
            $table->string('description', 45);
            $table->string('background_color', 100)->nullable();
            $table->string('text_color', 100)->nullable();
            $table->boolean('control_washes')->nullable();
            $table->integer('reader_id')->unsigned()->nullable();
            $table->boolean('show_dashboard')->nullable();
            $table->boolean('show_total_monetary')->nullable();
            $table->boolean('show_current_month')->nullable();
            $table->boolean('status');
            //$table->integer('company_id')->unsigned()->nullable();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['code', 'company_id'], 'control_area_unique');
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
        Schema::dropIfExists('control_areas');
    }
}
