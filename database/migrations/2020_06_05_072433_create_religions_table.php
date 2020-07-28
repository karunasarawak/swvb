<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->id('religion_id')->length(2);
            $table->string('religion', 50);
            $table->timestamps();
        });
        

        DB::table('religions')->insert(
            array(
                ['religion' => 'Islam'],
                ['religion' => 'Christian'],
                ['religion' => 'Hindu'],
                ['religion' => 'Buddha'],
                ['religion' => 'Catholic'],
                ['religion' => 'Others']
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
        Schema::dropIfExists('religions');
    }
}
