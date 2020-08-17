<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardPrintingBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_printing_batch', function (Blueprint $table) {
            $table->id('cpb_id');
            $table->integer('supplier_id');
            $table->string('consignment_no', 20)->nullable();
            $table->integer('invoice_no')->length(1)->nullable();
            $table->integer('courier_payment')->length(1)->nullable();
            $table->tinyInteger('dispatch_mode')->length(1)->nullable();
            $table->date('sent_date')->nullable();
            $table->date('receive_date')->nullable();
            $table->tinyInteger('cpb_status')->default(0);
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
        Schema::dropIfExists('card_printing_batch');
    }
}
