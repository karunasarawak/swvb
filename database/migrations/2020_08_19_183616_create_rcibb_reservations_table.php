<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRcibbReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcibb_reservations', function (Blueprint $table) {
            $table->id('rcibb_rsvn_id');
            $table->integer('rcibb_id')->length(11)->nullable();
            $table->integer('rsvn_id')->length(11)->nullable();
            $table->integer('serial_no')->length(2)->nullable();
            $table->integer('resort_id')->length(2)->nullable();
            // $table->integer('unit_id')->length(2)->nullable();
            $table->integer('inventory_id')->length(2)->nullable();
            $table->integer('unit_size')->length(11)->nullable();
            $table->integer('max')->length(2)->nullable();
            $table->integer('privacy')->length(2)->nullable();
            $table->integer('week_no')->length(2)->nullable();
            $table->date('deposit_date')->nullable();
            $table->integer('wd')->length(1)->nullable();
            $table->integer('we')->length(1)->nullable();
            $table->integer('poe')->length(2)->nullable();
            $table->string('ict_ref_no',20)->nullable();
            $table->string('deposit_no',20)->nullable();
            $table->string('nexoft_ref',20)->nullable();
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
        Schema::dropIfExists('rcibb_reservations');
    }
}
