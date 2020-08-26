<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bed_types', function (Blueprint $table) {
            $table->id('bed_type_id');
            $table->string('bed_type', 50)->nullable();
            $table->tinyInteger('bed_type_status')->length(1)->nullable();
            $table->timestamps();
        });

        DB::table('bed_types')->insert(array(
            [
                'bed_type' => 'Single Bed',
                'bed_type_status' => 1,
            ],
            [
                'bed_type' => 'Double Bed',
                'bed_type_status' => 1,
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
        Schema::dropIfExists('bed_types');
    }
}
