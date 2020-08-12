<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccIctRequestsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_ict_requests_details', function (Blueprint $table) {
            $table->id('aict_req_detail_id');
            $table->integer('aict_req_id')->length(11)->nullable();
            $table->integer('doc_id')->length(11)->nullable();
            $table->integer('inv_itm_type_id')->length(11)->nullable();
            $table->tinyInteger('doc_type')->length(1)->nullable();
            $table->decimal('unit_price')->length(8)->nullable();
            $table->tinyInteger('rounding')->length(1)->nullable();
            $table->integer('total_price')->length(50)->nullable();
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
        Schema::dropIfExists('acc_ict_requests_details');
    }
}
