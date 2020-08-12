<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id('id');
            $table->string('state_name');
            $table->integer('country_id');
            $table->timestamps();
        });

        DB::table('states')->insert(
            array(
                ['state_name' => 'Johor', 'country_id'=>1],
                ['state_name' => 'Kedah', 'country_id'=>1],
                ['state_name' => 'Kelantan', 'country_id'=>1],
                ['state_name' => 'Melaka', 'country_id'=>1],
                ['state_name' => 'Negeri Sembilan', 'country_id'=>1],
                ['state_name' => 'Pahang', 'country_id'=>1],
                ['state_name' => 'Perak', 'country_id'=>1],
                ['state_name' => 'Perlis', 'country_id'=>1],
                ['state_name' => 'Sabah', 'country_id'=>1],
                ['state_name' => 'Sarawak', 'country_id'=>1],
                ['state_name' => 'Selangor', 'country_id'=>1],
                ['state_name' => 'Terengganu', 'country_id'=>1],
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
        Schema::dropIfExists('states');
    }
}
