<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIctRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ict_requests', function (Blueprint $table) {
            $table->id('ict_req_id')->length(11);
            $table->integer('requested_by')->length(11)->nullable();
            $table->integer('resolved_by')->length(11)->nullable();
            $table->integer('dept_id')->length(11)->nullable();
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->string('request', 11)->nullable();
            $table->date('ict_req_created_at')->nullable();
            $table->string('attachment_directory', 255)->nullable();
            $table->integer('approval_by')->length(11)->nullable();
            $table->integer('verified_by')->length(11)->nullable();
            $table->date('resolved_dateline')->nullable();
            $table->string('ict_remarks', 255)->nullable();
            $table->tinyInteger('ict_req_status')->nullable();
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
        Schema::dropIfExists('ict_requests');
    }
}
