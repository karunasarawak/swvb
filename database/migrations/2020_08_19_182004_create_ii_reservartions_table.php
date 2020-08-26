<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIiReservartionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ii_reservartions', function (Blueprint $table) {
            $table->id('ii_rsvn_id');
            $table->integer('iiru_id')->length(11)->nullable();
            $table->integer('rsvn_id')->length(11)->nullable();
            $table->string('ruh_ref_no',14)->nullable();
            $table->string('ii_dep_ref_no')->nullable();
            $table->integer('exchange_no')->length(11)->nullable();
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
        Schema::dropIfExists('ii_reservartions');
    }
}
