<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_agents', function (Blueprint $table) {
            $table->id('ta_id')->length(11);
            $table->string('ta_name',60);
            $table->string('ta_code',10);
            $table->tinyInteger('ta_status')->length(1);
            $table->timestamps();
        });

        DB::table('travel_agents')->insert(array([        
            'ta_name' => 'Club Asia International',
            'ta_code' => 'CAI',
            'ta_status' => 1,
        ],[
            'ta_name' => 'Easturia Vacation Club',
            'ta_code' => 'EVC',
            'ta_status' => 1,
        ]));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_agents');
    }
}
