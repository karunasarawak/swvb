<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditNoteSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_note_subjects', function (Blueprint $table) {
            $table->id('cn_subject_id')->length(11);
            $table->foreignId('credit_id');
            $table->foreign('credit_id')->references('credit_id')->on('credit_notes');
            $table->foreignId('inv_id');
            $table->foreign('inv_id')->references('inv_id')->on('invoices');
            $table->foreignId('mbrship_id');
            $table->foreign('mbrship_id')->references('mbrship_id')->on('memberships');
            $table->decimal('amount', 9, 2)->nullable();
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
        Schema::dropIfExists('credit_note_subjects');
    }
}
