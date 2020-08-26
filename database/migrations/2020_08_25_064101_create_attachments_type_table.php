<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments_type', function (Blueprint $table) {
            $table->id('attachments_type_id');
            $table->string('type')->nullable();
            $table->timestamps();
        });

        DB::table('attachments_type')->insert(array(
            ['type'=>'Event Log, Call Log'],
            ['type'=>'Membership'],
            ['type'=>'ICT Request'],
            ['type'=>'RCI Enrollment'],
            ['type'=>'II Enrollment'],
            ['type'=>'Ent Point History'],
            ['type'=>'Point ICT Form'],
            ['type'=>'Account ICT Form']
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments_type');
    }
}
