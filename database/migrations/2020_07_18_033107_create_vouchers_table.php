<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id('voucher_id');
            $table->integer('accom_id')->length(11)->nullable();
            $table->string('voucher_no', 10)->nullable();
            $table->tinyInteger('no_occupancy')->nullable();
            $table->integer('night')->nullable();
            $table->date('cv_start_date')->nullable();
            $table->date('cv_exp_date')->nullable();
            $table->tinyInteger('start_day')->nullable();
            $table->tinyInteger('end_day')->nullable();
            $table->tinyInteger('has_used')->nullable();
            $table->tinyInteger('voucher_status')->nullable();
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
        Schema::dropIfExists('vouchers');
    }
}
