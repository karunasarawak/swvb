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
            $table->integer('lhdn_id')->default(1);

            $table->integer('sfb_req_by')->nullable();
            $table->date('sfb_req_at')->nullable();

            $table->integer('sfb_verify_by')->nullable();
            $table->date('sfb_verify_at')->nullable();

            $table->integer('sfb_approved_by')->nullable();
            $table->date('sfb_approved_at')->nullable();

            $table->date('sfb_sent_at')->nullable();
            $table->date('sfb_receive_at')->nullable();

            $table->integer('stamping_fee')->default(20);
            $table->integer('total_stamping_fee')->nullable();
            $table->decimal('penalty')->nullable();
            $table->integer('consignment_note')->nullable();

            $table->string('dispatch_mode')->nullable();
            $table->date('dispatch_date')->nullable();
            $table->tinyInteger('dispatch_status')->default(0);

            $table->tinyInteger('sfb_status')->default(0);

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
