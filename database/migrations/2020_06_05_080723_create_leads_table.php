<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id('lead_id')->length(11);
            $table->integer('salutation_id')->length(11);
            $table->integer('tour_id')->length(11);
            $table->integer('ethnicity')->length(11);
            $table->integer('religion_id')->length(11);
            $table->integer('sales_personnel_id')->length(11);
            $table->integer('telemarketer_id')->length(11);
            $table->integer('primary_addr_id')->length(11);
            $table->integer('secondary_addr_id')->length(11);
            $table->string('voucher_no',11);
            $table->string('name',70);
            $table->tinyInteger('gender')->length(1);
            $table->integer('nric')->length(11);
            $table->tinyInteger('marital_status')->length(1);
            $table->decimal('credit_card_limit',9,2);
            $table->string('mobile_no',14);
            $table->string('whatsapp_no',14);
            $table->string('primary_email',100);
            $table->string('alt_email',100);
            $table->string('nationality',100);
            $table->string('preferred_lang',80);
            $table->string('occupation',55);
            $table->string('company',60);
            $table->tinyInteger('is_pri_mbr')->length(1);
            $table->string('relationship_to_pri',30);
            $table->string('mbr_remarks',30);
            $table->tinyInteger('lead_type')->length(1);
            $table->timestamp('lead_created_at')->nullable();
            $table->timestamp('lead_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
