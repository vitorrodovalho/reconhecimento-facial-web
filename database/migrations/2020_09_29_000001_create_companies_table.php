<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('nickname', 45)->nullable();
            $table->string('cnpj', 20)->unique();
            $table->string('municipal_registration', 50)->nullable();
            $table->string('state_registration', 50)->nullable();
            $table->string('logo_patch', 200)->nullable();
            $table->string('currency', 20)->nullable();
            $table->string('language', 20)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('address_country', 100)->nullable();
            $table->string('address_neighborhood', 100)->nullable();
            $table->integer('address_number')->nullable();
            $table->string('address_complement', 200)->nullable();
            $table->string('address_city', 200)->nullable();
            $table->string('address_state', 100)->nullable();
            $table->string('address_postal_code', 9)->nullable();
            $table->boolean('show_login')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
