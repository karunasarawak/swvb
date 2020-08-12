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
            $table->id('aict_req_id');
            
            $table->integer('aict_mbrship_id')->length(11)->nullable();
            $table->integer('aict_rsvn_id')->length(11)->nullable();
            
            $table->integer('aict_requested_by')->length(11)->nullable();
            $table->integer('aict_verifier')->length(11)->nullable();
            $table->integer('aict_approval')->length(11)->nullable();
            $table->integer('aict_processed')->length(11)->nullable();
            $table->string('aict_ref_no',15)->nullable();
            $table->date('aict_date_requested')->length(11)->nullable();
            $table->date('aict_date_verified')->length(11)->nullable();
            $table->date('aict_date_approved')->length(11)->nullable();
            $table->date('aict_date_processed')->length(11)->nullable();
            
            
            
            
            $table->string('aict_remarks', 255)->nullable();
            $table->string('aict_other_remarks', 255)->nullable();
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
