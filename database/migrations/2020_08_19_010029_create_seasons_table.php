<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id('season_id');
            $table->integer('accom_id')->length(11)->nullable();
            $table->string('season', 50)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->timestamps();
        });

        DB::table('seasons')->insert(array(
            [
                'accom_id' => 1,
                'season' => 'Peak',
                'start_date' => '2020-11-01',
                'end_date' => '2020-11-30',
            ],
            [
                'accom_id' => 1,
                'season' => 'Super Peak',
                'start_date' => '2020-12-01',
                'end_date' => '2020-12-31',
            ],
            [
                'accom_id' => 2,
                'season' => 'Public Holiday',
                'start_date' => '2020-11-01',
                'end_date' => '2020-11-30',
            ],
            [
                'accom_id' => 2,
                'season' => 'Peak',
                'start_date' => '2020-12-01',
                'end_date' => '2020-12-31',
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
        Schema::dropIfExists('seasons');
    }
}
