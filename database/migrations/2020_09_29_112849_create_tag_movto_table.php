<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagMovtoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_movto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reader_id')->unsigned();
            $table->integer('reader_antenna')->unsigned();
            $table->string('epc_binary', 1000);
            $table->string('epc_hex', 45)->nullable();
            $table->string('epc_uri', 100);
            $table->string('epc_header', 100);
            $table->integer('filter')->unsigned();
            $table->integer('partition')->unsigned();
            $table->string('epc_item_refer', 45);
            $table->string('epc_serial', 45);
            $table->string('epc_location_ref', 45);
            $table->string('epc_extension', 45);
            $table->string('epc_asset_type', 45);
            $table->string('epc_asset_ref', 45);
            $table->string('epc_doc_type', 45);
            $table->string('epc_part_ref', 45);
            $table->string('epc_coupon_ref', 45);
            $table->string('epc_general_manager_num', 45);
            $table->string('epc_object_class', 45);
            $table->string('epc_cage_dodaac', 45);
            $table->string('epc_part_number', 45);
            $table->string('epc_scheme', 45)->nullable();
            $table->string('epcis', 100);
            $table->string('epc_sscc_service_ref', 45);
            $table->string('epc_gsrn_service_ref', 45);
            $table->boolean('packed');
            $table->boolean('palletized');
            $table->boolean('stored');
            $table->string('cod_packing', 100);
            $table->boolean('unusable');
            $table->date('date_packing');
            $table->string('message', 2000);
            $table->boolean('event_processed');
            $table->string('event_error_description', 1000);
            $table->integer('area_control_id')->unsigned();
            $table->string('message_notes', 1000);
            $table->string('message_responsible', 1000);
            $table->dateTime('date_entry');
            $table->integer('company_id')->unsigned()->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->index(['reader_id', 'epc_hex', 'date_entry', 'area_control_id', 'company_id'], 'tag_movto_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_movto');
    }
}
