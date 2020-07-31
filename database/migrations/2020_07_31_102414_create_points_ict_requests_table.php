<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsIctRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points_ict_requests', function (Blueprint $table) {
            $table->id('ict_req_id');
            $table->integer('staff_id')->length(11)->nullable();
            $table->integer('rsvn_id')->length(11)->nullable();
            $table->integer('use_year')->length(11)->nullable();
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->integer('pict_req_by')->length(11)->nullable();
            $table->integer('pict_verifier')->length(11)->nullable();
            $table->integer('pict_approval')->length(11)->nullable();
            $table->integer('wd_points')->length(6)->nullable();
            $table->date('proposed_expdate')->length(11)->nullable();
            $table->integer('we')->length(2)->nullable();
            $table->integer('poe')->length(11)->nullable();
            $table->dateTime('pict_req_created_at')->nullable();
            $table->integer('pict_req_status')->length(1)->nullable();
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
        Schema::dropIfExists('points_ict_requests');
    }
}
