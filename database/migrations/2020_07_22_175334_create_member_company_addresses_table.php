<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberCompanyAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_companies', function (Blueprint $table) {
            $table->id('comp_id');
            $table->integer('mbrship_id')->nullable();
            $table->string('comp_name')->nullable();
            $table->string('comp_nob', 10)->nullable();
            $table->string('comp_no',10)->nullable();
            $table->string('comp_addr1',255)->nullable();
            $table->string('comp_addr2',255)->nullable();
            $table->string('comp_pcode',255)->nullable();
            $table->string('comp_city',255)->nullable();
            $table->string('comp_state',255)->nullable();
            $table->string('comp_country',255)->nullable();
            $table->string('comp_email',255)->nullable();
            $table->string('comp_contact',255)->nullable();
            $table->string('comp_fax',255)->nullable();
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
        Schema::dropIfExists('member_company_addresses');
    }
}
