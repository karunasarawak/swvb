<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentScheduleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installment_schedule', function (Blueprint $table) {
            $table->id('install_schedule_id');
            $table->integer('mbrship_id')->nullable();
            $table->decimal('price')->length(11)->nullable();
            $table->decimal('net_price')->length(11)->nullable();
            $table->decimal('downpayment')->length(11)->nullable();
            $table->integer('duration')->length(11)->nullable();
            $table->decimal('admin_charges')->length(11)->nullable();
            $table->decimal('addition')->length(11)->nullable();
            $table->decimal('discount')->length(11)->nullable();
            $table->decimal('outstanding')->length(11)->nullable();
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
        Schema::dropIfExists('installment_schedule_tables');
    }
}
