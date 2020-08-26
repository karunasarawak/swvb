<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatePenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('late_penalties', function (Blueprint $table) {
            $table->id('penalty_id');
            $table->integer('state_id')->length(11)->nullable();
            $table->integer('accom_id')->length(11)->nullable();
            $table->integer('country_id')->length(11)->nullable();
            $table->time('check_in_start')->nullable();
            $table->time('check_out_start')->nullable();
            $table->decimal('penalty', 5, 2)->nullable();

            $table->timestamps();
        });

        DB::table('late_penalties')->insert(array(
            [
                'accom_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'check_in_start' => '15:00:00',
                'check_out_start' => '12:00:00',
                'penalty' => 50,
            ],
            [
                'accom_id' => 2,
                'country_id' => 2,
                'state_id' => 2,
                'check_in_start' => '15:00:00',
                'check_out_start' => '12:00:00',
                'penalty' => 50,
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
        Schema::dropIfExists('late_penalties');
    }
}
