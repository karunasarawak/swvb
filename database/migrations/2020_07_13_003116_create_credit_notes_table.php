<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_notes', function (Blueprint $table) {
            $table->id('credit_id')->length(11);
            $table->integer('credit_no')->length(11);
            $table->foreignId('mbrship_id');
            $table->foreign('mbrship_id')->references('mbrship_id')->on('memberships');
            $table->foreignId('cn_type_id');
            $table->foreign('cn_type_id')->references('cn_type_id')->on('credit_note_types');
            $table->string('cn_remarks', 255)->nullable();
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
        Schema::dropIfExists('credit_notes');
    }
}
