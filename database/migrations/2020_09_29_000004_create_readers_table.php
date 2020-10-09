<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 30);
            $table->ipAddress('ip', 15);
            $table->string('type', 15);
            $table->string('antenna', 15);
            $table->string('cod_local', 15);
            $table->boolean('enable_entry')->nullable();
            $table->boolean('enable_exit')->nullable();
            $table->boolean('enable_inventory')->nullable();
            $table->boolean('entry_exit_auto')->nullable();
            $table->boolean('reentry')->nullable();
            $table->string('gln_prefix', 60)->nullable();
            $table->string('location', 60)->nullable();
            $table->string('extension', 60)->nullable();
            $table->string('port', 20)->nullable();
            $table->string('type_connection', 10)->nullable();
            $table->string('type_address', 10)->nullable();
            $table->boolean('enable_buzzer')->nullable();
            $table->boolean('enable_mask')->nullable();
            $table->string('mask_data', 100)->nullable();
            $table->string('mask_len', 6)->nullable();
            $table->string('mask_address', 6)->nullable();
            $table->boolean('session')->nullable();
            $table->ipAddress('ip_alert')->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->integer('model_id')->unsigned()->nullable();
            $table->boolean('status');
            //$table->integer('company_id')->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            //$table->index(['ip', 'antenna', 'company_id'], 'readers_unique');
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
        Schema::dropIfExists('readers');
    }
}
