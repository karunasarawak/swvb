<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptCreditCardInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_credit_card_infos', function (Blueprint $table) {
            $table->id('cc_info_id')->length(11);
            $table->foreignId('receipt_id');
            $table->foreign('receipt_id')->references('receipt_id')->on('receipts');
            $table->foreignId('terminal_id');
            $table->foreign('terminal_id')->references('terminal_id')->on('terminals');
            $table->string('card_no', 60)->nullable();
            $table->string('card_expiry', 60)->nullable();
            $table->string('issuer_bank', 60)->nullable();
            $table->string('name_on_card', 255)->nullable();
            $table->string('cvv', 60)->nullable();
            $table->string('bank_charges', 60)->nullable();
            $table->integer('created_by')->length(11)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipt_credit_card_infos');
    }
}
