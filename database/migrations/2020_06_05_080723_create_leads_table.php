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
            $table->integer('salutation_id')->length(11)->nullable();
            $table->integer('tour_id')->length(11)->nullable();
            $table->integer('ethnicity')->length(11)->nullable();
            $table->integer('religion_id')->length(11)->nullable();
            $table->integer('sales_personnel_id')->length(11)->nullable();
            $table->integer('telemarketer_id')->length(11)->nullable();
            $table->integer('primary_addr_id')->length(11)->nullable();
            $table->integer('secondary_addr_id')->length(11)->nullable();
            $table->string('voucher_no',11)->nullable();
            $table->string('name',70)->nullable();
            $table->tinyInteger('gender')->length(1)->nullable();
            $table->integer('nric')->length(11)->nullable();
            $table->tinyInteger('marital_status')->length(1)->nullable();
            $table->decimal('credit_card_limit',9,2)->nullable();
            $table->string('mobile_no',14)->nullable();
            $table->string('whatsapp_no',14)->nullable();
            $table->string('primary_email',100)->nullable();
            $table->string('alt_email',100)->nullable();
            $table->string('nationality',100)->nullable();
            $table->string('preferred_lang',80)->nullable();
            $table->string('occupation',55)->nullable();
            $table->string('company',60)->nullable();
            $table->tinyInteger('is_pri_mbr')->length(1)->nullable();
            $table->string('relationship_to_pri',30)->nullable();
            $table->string('mbr_remarks',30)->nullable();
            $table->tinyInteger('lead_type')->length(1)->nullable();
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
        Schema::dropIfExists('leads');
    }
}
