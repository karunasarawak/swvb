<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('repurchase', function (Blueprint $table) {
            $table->id();
            $table->integer('mbrship_id');
            $table->integer('current_ent_wd');
            $table->integer('current_ent_we');
            $table->date('payment_to_date');
            $table->date('amf_payment_to_date');
            $table->date('outstanding_amt');
            $table->string('applicant_name')->length(1000);
            $table->date('request_date');
            $table->date('request_received_date');
            $table->integer('current_mbrship_period');
            $table->decimal('repurchase_amount');
            $table->decimal('nett_repurchase_amount');
            $table->string('remarks')->length(1000)->nullable;
            $table->string('account_holder')->length(1000);
            $table->string('bank_name')->length(500);
            $table->string('account_no');
            $table->string('address')->length(1000);
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
        Schema::dropIfExists('_repurchase');
    }
}
{{  }}{{  }}{{  }}