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
        Schema::disableForeignKeyConstraints();
        Schema::create('leads', function (Blueprint $table) {
            $table->id('lead_id')->length(11);
            $table->bigInteger('salutation_id')->length(11)->unsigned()->nullable();
            $table->foreign('salutation_id')->references('salutation_id')->on('salutations');
            $table->tinyInteger('ethnicity_id')->length(2)->nullable();
            $table->tinyInteger('religion_id')->length(2)->nullable();
            $table->tinyInteger('telemarketer_id')->length(2)->nullable();
            $table->tinyInteger('venue_id')->length(2)->nullable();
            $table->string('name',255)->nullable();
            $table->tinyInteger('gender')->length(11)->nullable();
            $table->string('nric')->length(20)->nullable();
            $table->date('dob')->length(11)->nullable();
            $table->tinyInteger('marital_status')->length(1)->nullable();

            $table->integer('nationality')->length(100)->nullable();
            $table->string('occupation', 50)->nullable();
            $table->string('company', 60)->nullable();

            $table->string('mobile_no',14)->nullable();
            $table->string('whatsapp_no',14)->nullable();
            $table->string('home_no',14)->nullable();
            $table->string('office_no',14)->nullable();
            $table->string('primary_email',100)->nullable();
            $table->string('alt_email',100)->nullable();

            $table->integer('credit_card_limit')->length(11)->nullable();
            $table->tinyInteger('is_pri_mbr')->length(1)->nullable();
            $table->tinyInteger('is_sec_mbr')->length(1)->nullable();
            

            $table->string('relationship_to_pri_mbr', 30)->nullable();

            $table->string('prefer_lang',80)->nullable();

            $table->tinyInteger('status')->default(1)->nullable();
            $table->timestamps();
            
        });

        $current = date('Y-m-d H:i:s');

        DB::table('leads')->insert(
            array(
                ['salutation_id' => 1, 'name' => 'John Doe', 'mobile_no' => '01234567890', 'whatsapp_no' => '01234567890', 'credit_card_limit'=> 1000, 'telemarketer_id'=> 1, 'created_at'=> $current, 'updated_at'=>$current],
                ['salutation_id' => 2, 'name' => 'Mary Jane', 'mobile_no' => '019876543210', 'whatsapp_no' => '019876543210', 'credit_card_limit'=> 2000, 'telemarketer_id'=> 2, 'created_at'=> $current, 'updated_at'=>$current],
                ['salutation_id' => 1, 'name' => 'Arthur', 'mobile_no' => '019876543210', 'whatsapp_no' => '019876543210', 'credit_card_limit'=> 2000, 'telemarketer_id'=> 1, 'created_at'=> $current, 'updated_at'=>$current],
                ['salutation_id' => 2, 'name' => 'Morgan', 'mobile_no' => '019876543210', 'whatsapp_no' => '019876543210', 'credit_card_limit'=> 2000, 'telemarketer_id'=> 2, 'created_at'=> $current, 'updated_at'=>$current],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('leads');
    }
}
