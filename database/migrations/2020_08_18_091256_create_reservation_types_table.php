<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_types', function (Blueprint $table) {
            $table->id('rsvn_type_id');
            $table->string('rsvn_type', 80)->nullable();
            $table->tinyinteger('club')->length(1)->nullable();
            $table->tinyInteger('has_breakfast')->length(1)->nullable();
            $table->tinyInteger('pymt_unit')->length(1)->nullable();
            $table->tinyInteger('status')->length(1)->nullable();

            $table->timestamps();
        });

        DB::table('reservation_types')->insert(array
        (
            [
                'rsvn_type' => 'Entitlement',
                'club' => 1,
                'has_breakfast' => 0,
                'pymt_unit' => 1,
            ],
            [
                'rsvn_type' => 'Point',
                'club' => 0,
                'has_breakfast' => 0,
                'pymt_unit' => 1,
            ],
            [
                'rsvn_type' => 'Associate rates',
                'club' => 1,
                'has_breakfast' => 0,
                'pymt_unit' => 1,
            ],
            [
                'rsvn_type' => 'Entitlement with breakfast',
                'club' => 1,
                'has_breakfast' => 1,
                'pymt_unit' => 1,
            ],
            [
                'rsvn_type' => 'Associate rate with breakfast',
                'club' => 1,
                'has_breakfast' => 1,
                'pymt_unit' => 1,
            ],
            [
                'rsvn_type' => 'Points with breakfast',
                'club' => 1,
                'has_breakfast' => 1,
                'pymt_unit' => 1,
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
        Schema::dropIfExists('reservation_types');
    }
}
