<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_types', function (Blueprint $table) {
            $table->id('mbrship_type_id');
            $table->string('mbrship_type', 80)->nullable();
            $table->string('num_start_from', 1)->nullable();

            $table->timestamps();
        });

        DB::table('membership_types')->insert(array(
        [
            'mbrship_type' => 'Member',
            'num_start_from' => '1',
        ],
        [
            'mbrship_type' => 'Member',
            'num_start_from' => '2',   
        ],
        [
            'mbrship_type' => 'Be Back',
            'num_start_from' => '9',   
        ],
        [
            'mbrship_type' => 'Company',
            'num_start_from' => '0',   
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
        Schema::dropIfExists('membership_types');
    }
}
