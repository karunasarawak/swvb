<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race', function (Blueprint $table) {
            $table->id('race_id');
            $table->string('race_name');
            $table->timestamps();
        });

        DB::table('race')->insert(
            array(
                ['race_name' => 'Melayu'],
                ['race_name' => 'Chinese'],
                ['race_name' => 'Indian'],
                ['race_name' => 'Melanau'],
                ['race_name' => 'Bidayuh'],
                ['race_name' => 'Bumiputera'],
                ['race_name' => 'Others']
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
        Schema::dropIfExists('race');
    }
}
