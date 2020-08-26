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
        ],[
            'ta_name' => 'BSM',
            'ta_code' => 'BSM',
            'ta_status' => 1,
        ],[
            'ta_name' => 'GHP',
            'ta_code' => 'GHP',
            'ta_status' => 1,
        ],[
            'ta_name' => 'WTT',
            'ta_code' => 'WTT',
            'ta_status' => 1,
        ]
        ,[
            'ta_name' => 'ADC',
            'ta_code' => 'ADC',
            'ta_status' => 1,
        ]
        ,[
            'ta_name' => 'GDP',
            'ta_code' => 'GDP',
            'ta_status' => 1,
        ],[
            'ta_name' => 'GAP',
            'ta_code' => 'GAP',
            'ta_status' => 1,
        ],[
            'ta_name' => 'LHB',
            'ta_code' => 'LHB',
            'ta_status' => 1,
        ],[
            'ta_name' => 'FVC',
            'ta_code' => 'FVC',
            'ta_status' => 1,
        ]
        ,[
            'ta_name' => 'TVC',
            'ta_code' => 'TVC',
            'ta_status' => 1,
        ]
        ,[
            'ta_name' => 'TAMU',
            'ta_code' => 'Tamu',
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
