<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaritialStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maritial_status', function (Blueprint $table) {
            $table->id('maritial_id');
            $table->string('maritial_name')->nullable();
            $table->timestamps();
        });

        DB::table('maritial_status')->insert(
            array(
                ['maritial_name' => 'Single'],
                ['maritial_name' => 'Married'],
                ['maritial_name' => 'Widowed'],
                ['maritial_name' => 'Widower']
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
        Schema::dropIfExists('maritial_status');
    }
}
