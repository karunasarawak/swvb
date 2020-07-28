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
            $table->id('mbrship_id');
            $table->integer('mbrship_no')->length(11)->nullable();

            $table->foreignId('lead_id1')->length(11)->nullable();
            $table->foreign('lead_id1')->references('lead_id')->on('leads');
            $table->integer('lead_id2')->nullable();

            $table->string('lang', 20)->nullable();
            $table->string('relationship', 20)->nullable();

            $table->integer('pri_addr_id')->length(11)->nullable();
            $table->integer('alt_addr_id')->length(11)->nullable();

            $table->string('remarks', 255)->nullable();

            $table->tinyInteger('contract_type')->nullable();
            $table->integer('comp_id')->length(11)->nullable();

            $table->integer('application_no')->length(11)->nullable();
            $table->date('application_date')->nullable();
            $table->integer('agreement_no')->length(11)->nullable();
            $table->date('agreement_date')->nullable();
            
            $table->integer('package_id')->length(11)->nullable();

            $table->integer('install_schedule_id')->length(11)->nullable();

            $table->integer('overpayment')->length(11)->nullable();
            
            $table->integer('cc_id_amf')->length(11)->nullable();
            $table->integer('cc_id_install')->length(11)->nullable();
            
            $table->integer('declaration_no')->length(11)->nullable();
            $table->string('mro', 8)->nullable();
            $table->string('cco', 8)->nullable();
            
            $table->tinyInteger('install_auto')->length(1)->nullable();
            $table->tinyInteger('amf_auto')->length(1)->nullable();
            $table->string('mbrship_status', 255)->default('pending');

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
        Schema::dropIfExists('memberships');
    }
}
