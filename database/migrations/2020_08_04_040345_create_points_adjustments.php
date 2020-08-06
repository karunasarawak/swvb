2020<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsAdjustments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points_adjustments', function (Blueprint $table) {
            $table->id('pict_req_detail_id');
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->integer('pict_req_id')->length(11)->nullable();
            $table->integer('poe_year')->length(4)->nullable();
            $table->integer('points')->length(6)->nullable();
            $table->integer('we')->length(2)->nullable();
            $table->integer('wd')->length(2)->nullable();
            $table->date('expiry_date')->nullable();
            $table->tinyInteger('req_type')->length(1)->nullable();
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
        Schema::dropIfExists('points_adjustments');
    }
}
