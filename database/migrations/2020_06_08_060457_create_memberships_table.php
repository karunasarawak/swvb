<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id('contract_id')->length(11);
            $table->integer('mbrship_no')->length(11);
            $table->integer('lead_id')->length(11);
            $table->integer('tour_id')->length(11);
            $table->integer('package_id')->length(11);
            $table->integer('cc_id_amf')->length(11)->nullable();
            $table->integer('cc_id_installment')->length(11)->nullable();
            $table->integer('application_no')->length(11);
            $table->date('application_date');
            $table->integer('agreement_no')->length(11);
            $table->date('agreement_date');
            $table->integer('maturity')->length(2);
            $table->integer('installment_duration')->length(2);
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('package_price', 8, 2);
            $table->decimal('addition', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->integer('declaration_no')->length(11);
            $table->integer('mro')->length(11);
            $table->integer('cco')->length(11);
            $table->tinyInteger('have_mbrcard')->length(1)->nullable();
            $table->tinyInteger('auto_accrue_amf')->length(1)->nullable();
            $table->tinyInteger('auto_accrue_installment')->length(1)->nullable();

            $table->timestamp('contract_created_at')->nullable();
            $table->timestamp('contract_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
