<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_rooms', function (Blueprint $table) {
            $table->id('rsvn_room_id');
            $table->integer('rsvn_id')->length(11)->nullable();
            $table->integer('rsvn_type_id')->length(11)->nullable();
            $table->integer('unit_type_id')->length(11)->nullable();
            $table->integer('bed_type_id')->length(11)->nullable();
            $table->string('room_no', 10)->nullable();
            $table->integer('room_no_of_pax')->length(2)->nullable();
            $table->decimal('room_price', 6, 2)->nullable();
            $table->integer('room_wd_points')->length(6)->nullable();
            $table->integer('room_we')->length(2)->nullable();
            $table->string('room_remark', 1000)->nullable();
            $table->decimal('bf_price_per_pax', 6, 2)->nullable();
            $table->integer('bf_pax')->length(3)->nullable();
            $table->tinyInteger('bf_price_unit')->length(1)->nullable();
            $table->timestamps();
        });

        DB::table('reservation_rooms')->insert(
            array(
                [ 
                    'rsvn_id' => 1,
                    'rsvn_type_id' => 1,
                    'unit_type_id' => 1,
                    'bed_type_id' => 1,
                    'room_no' => '217',
                    'room_no_of_pax' => 4,
                    'room_price' => 300,
                    'room_wd_points' => 2,
                    'room_we' => 1,
                    'room_remark' => 'remarks',
                    'bf_price_per_pax' => 40,
                    'bf_pax' => 4,
                    'bf_price_unit' => 1,
                ],
                [ 
                    'rsvn_id' => 2,
                    'rsvn_type_id' => 2,
                    'unit_type_id' => 1,
                    'bed_type_id' => 1,
                    'room_no' => '201',
                    'room_no_of_pax' => 1,
                    'room_price' => 300,
                    'room_wd_points' => 2,
                    'room_we' => 1,
                    'room_remark' => 'remarks',
                    'bf_price_per_pax' => 40,
                    'bf_pax' => 4,
                    'bf_price_unit' => 1,
                ],
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
        Schema::dropIfExists('reservation_rooms');
    }
}
