<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipReinstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_reinstate', function (Blueprint $table) {
            $table->id('reinstate_id');
            $table->integer('membership_id')->length(11)->nullable();
            $table->integer('receipt_id')->length(11)->nullable();
            $table->date('date')->nullable();
            $table->decimal('amt_due')->length(30)->nullable();
            $table->decimal('total_amount')->length(30)->nullable();
            $table->string('pt_offset_amt', 50)->nullable();
            $table->integer('ref_no')->length(30)->nullable();
            $table->decimal('late_payment')->length(30)->nullable();
            $table->decimal('reinstate')->length(30)->nullable();
            $table->decimal('payable')->length(30)->nullable();
            $table->string('remark', 65)->nullable();
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
        Schema::dropIfExists('membership_reinstate');
    }
}
