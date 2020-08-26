<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComChannelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_channels', function (Blueprint $table) {
            $table->id('com_channel_id');
            $table->string('com_channel');
            $table->timestamps();
        });

        DB::table('com_channels')->insert(array(
            ['com_channel'=>'Email'],
            ['com_channel'=>'Fax'],
            ['com_channel'=>'Phone Call'],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_channel');
    }
}
