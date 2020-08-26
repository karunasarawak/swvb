<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_types', function (Blueprint $table) {
            $table->id('unit_type_id');
            $table->integer('bed_type_id')->length(11)->nullable();
            $table->integer('accom_id')->length(11)->nullable();
            $table->string('unit_type', 80)->nullable();
            $table->integer('min_pax')->length(2)->nullable();
            $table->integer('max_pax')->length(2)->nullable();
            $table->integer('ut_status')->length(2)->nullable();
            
            $table->timestamps();
        });

        DB::table('unit_types')->insert(array([
            'bed_type_id' => 1,
            'accom_id' => 1,
            'bed_type_id' => 1,
            'unit_type' => 'Chalet',
            'min_pax' => 1,
            'max_pax' => 3,
            'ut_status' => 1,
        ],
        [
            'bed_type_id' => 2,
            'accom_id' => 1,
            'bed_type_id' => 1,
            'unit_type' => 'Seaside view',
            'min_pax' => 1,
            'max_pax' => 3,
            'ut_status' => 1,
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
        Schema::dropIfExists('unit_types');
    }
}
