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
            
            $table->string('mbrship_no', 11)->nullable();
            $table->integer('pri_addr_id')->length(11)->nullable();
            $table->integer('alt_addr_id')->length(11)->nullable();
            
            $table->tinyInteger('contract_type')->length(1)->nullable();
            $table->integer('comp_id')->length(11)->nullable();
            $table->string('prefer_lang', 20)->nullable();
            
            $table->string('application_no', 11)->nullable();
            $table->date('application_date')->nullable();
            $table->string('agreement_no', 11)->nullable();
            $table->date('agreement_date'); //auto calculate 10 days after application date
            
            $table->integer('mbrship_term')->length(2)->nullable();//get from package table
            $table->date('mbrship_exp')->nullable();
                      
            $table->string('declaration_no', 11)->nullable();
            $table->tinyInteger('install_auto')->length(1)->nullable();
            $table->tinyInteger('amf_auto')->length(1)->nullable();
            $table->decimal('overpayment', 7, 2)->length(11)->nullable();

            $table->tinyInteger('has_card')->length(1)->default(0);
            $table->tinyInteger('has_stamped')->length(1)->default(0);
            
            $table->tinyInteger('mbrship_status')->default(1);
            $table->string('mbrship_remarks', 255)->nullable();

            $table->timestamps();
        });

        DB::table('memberships')->insert(array(
            [
                'lead_id1' => 1,
                'lead_id2' => null,

                'package_id' => 1,
                
                'cc_id_amf' => 1,
                'cc_id_install' => 1,

                'mro' => 1,
                'cco' => 2,
                
                'mbrship_no' => '100010000',
                'pri_addr_id' => 1,
                'alt_addr_id' => null,
                
                'contract_type' => 0,
                'comp_id' => null,
                'prefer_lang' => 'English',
                
                'application_no' => 'APP 8374',
                'application_date' => '2020-08-11',
                'agreement_no' => '8234',
                'agreement_date' => '2020-08-22',
                
                'mbrship_term' => 30,
                'mbrship_exp' => '2050-08-22',
                            
                'declaration_no' => '',
                'install_auto' => 1,
                'amf_auto' => 1,
                'overpayment' => 200,

                'has_card' => 0,
                'has_stamped' => 0,
                
                'mbrship_status' => 1,
                'mbrship_remarks' => '-',
            ],
            [
                'lead_id1' => 2,
                'lead_id2' => null,

                'package_id' => 1,
                
                'cc_id_amf' => 1,
                'cc_id_install' => 1,

                'mro' => 1,
                'cco' => 2,
                
                'mbrship_no' => '200010000',
                'pri_addr_id' => 1,
                'alt_addr_id' => null,
                
                'contract_type' => 0,
                'comp_id' => null,
                'prefer_lang' => 'English',
                
                'application_no' => 'APP 8374',
                'application_date' => '2020-08-11',
                'agreement_no' => '8234',
                'agreement_date' => '2020-08-22',
                
                'mbrship_term' => 30,
                'mbrship_exp' => '2050-08-22',
                            
                'declaration_no' => '',
                'install_auto' => 1,
                'amf_auto' => 1,
                'overpayment' => 200,

                'has_card' => 0,
                'has_stamped' => 0,
                
                'mbrship_status' => 1,
                'mbrship_remarks' => '-',
            ],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('memberships');
        Schema::enableForeignKeyConstraints();
    }
}
