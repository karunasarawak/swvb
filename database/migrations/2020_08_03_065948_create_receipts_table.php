<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id('receipt_id')->length(11);
            $table->integer('receipt_no')->length(11);
            $table->foreignId('mbrship_id');
            $table->foreign('mbrship_id')->references('mbrship_id')->on('memberships');
            $table->string('collected_by', 60)->nullable();
            $table->string('method', 60)->nullable();
            $table->string('bank_in_to', 60)->nullable();
            $table->string('bank_in_ref_no', 60)->nullable();
            $table->decimal('receipt_amount', 9, 2)->nullable();
            $table->decimal('invoice_amount', 9, 2)->nullable();
            $table->decimal('receipt_prepayment', 9, 2)->nullable();
            $table->string('clearance_date', 60)->nullable();
            $table->string('remark', 255)->nullable();
            $table->date('issue_date')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('receipts');
    }
}
