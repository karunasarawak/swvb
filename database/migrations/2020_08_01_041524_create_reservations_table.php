<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('rsvn_id')->length(11);
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->integer('rsvn_type_id')->length(11)->nullable();
            $table->integer('accom_id')->length(11)->nullable();
            $table->integer('voucher_id')->length(11)->nullable();
            // $table->integer('invoice_id')->length(11)->nullable();
            $table->integer('rsvn_no')->length(11)->nullable();
            $table->tinyInteger('communication_channel')->length(1)->nullable();
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->integer('no_of_pax')->length(2)->nullable();
            $table->string('internal_remark', 255)->nullable();
            $table->string('hotel_remark', 510)->nullable();
            $table->date('booking_received_date')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
