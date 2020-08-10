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
            
            $table->foreignId('lead_id1')->length(11)->nullable();
            $table->foreign('lead_id1')->references('lead_id')->on('leads');
            $table->integer('lead_id2')->nullable();
            
            $table->integer('package_id')->length(11)->nullable();
            
            $table->integer('cc_id_amf')->length(11)->nullable();
            $table->integer('cc_id_install')->length(11)->nullable();

            $table->integer('mro')->length(11)->nullable();
            $table->integer('cco')->length(11)->nullable();

            //?
            $table->string('relationship', 20)->nullable();
            $table->integer('install_schedule_id')->length(11)->nullable();
            //?

            $table->integer('pri_addr_id')->length(11)->nullable();
            $table->integer('alt_addr_id')->length(11)->nullable();
            
            $table->string('mbrship_no', 11)->nullable();
            $table->tinyInteger('contract_type')->length(1)->nullable();
            $table->integer('comp_id')->length(11)->nullable();
            $table->string('mbrship_no', )->nullable();
            $table->string('prefer_lang', 20)->nullable();
            
            $table->integer('application_no')->length(11)->nullable();
            $table->date('application_date')->nullable();
            $table->integer('agreement_no')->length(11)->nullable();
            $table->date('agreement_date'); //auto calculate 10 days after application date
            
            $table->integer('mbrship_term')->length(2);//get from package table
            $table->date('mbrship_exp');
                      
            $table->integer('declaration_no')->length(11)->nullable();
            $table->tinyInteger('install_auto')->length(1)->nullable();
            $table->tinyInteger('amf_auto')->length(1)->nullable();
            $table->decimal('overpayment', 7, 2)->length(11)->nullable();
            
            $table->integer('rci_mbrship_no')->length(11)->nullable();
            $table->integer('ii_mbrship_no')->length(11)->nullable();
            $table->integer('ppv_mbrship_no')->length(11)->nullable();

            $table->tinyInteger('has_card')->length(1)->default(0);
            $table->tinyInteger('has_stamped')->length(1)->default(0);
            
            $table->tinyInteger('mbrship_status')->length(1)->default(1);
            $table->string('mbrship_remarks', 255)->nullable();

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
