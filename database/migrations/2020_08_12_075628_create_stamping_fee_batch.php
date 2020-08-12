<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStampingFeeBatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stamping_fee_batch', function (Blueprint $table) {
            $table->id('sfb_id');
            $table->tinyInteger('batch_no')->nullable();
            $table->integer('sfb_req_by')->nullable();
            $table->integer('sfb_approved_by')->nullable();
            $table->decimal('penalty')->nullable();
            $table->date('sfb_req_at')->nullable();
            $table->date('sfb_approved_at')->nullable();
            $table->date('sfb_sent_at')->nullable();
            $table->tinyInteger('sfb_status')->nullable();
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
        Schema::dropIfExists('stamping_fee_batch');
    }
}
