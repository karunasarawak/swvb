<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccIctRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_ict_requests', function (Blueprint $table) {
            $table->id('ict_req_id');
            $table->integer('staff_id')->length(11)->nullable();
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->integer('inv_itm_id')->length(11)->nullable();
            $table->integer('pict_req_by')->length(11)->nullable();
            $table->integer('aict_verifier')->length(11)->nullable();
            $table->integer('aict_approval')->length(11)->nullable();
            $table->decimal('unit_price')->length(8)->nullable();
            $table->integer('original_inv_no')->length(11)->nullable();
            $table->tinyInteger('doc_type')->length(1)->nullable();
            $table->integer('total_price')->length(50)->nullable();
            $table->string('reasons', 50)->nullable();
            $table->dateTime('aict_req_created_at')->length(11)->nullable();
            $table->tinyInteger('aict_req_status')->length(1)->nullable();
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
        Schema::dropIfExists('acc_ict_requests');
    }
}
