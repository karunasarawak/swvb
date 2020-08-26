<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id('facility_id');
            $table->string('facility', 60)->nullable();
            $table->integer('ta_id')->length(11)->nullable();
            $table->tinyInteger('sarawakian_field')->length(1)->nullable();
            $table->string('facility_remark', 1000);
            $table->tinyInteger('facility_status')->length(1)->nullable();

            $table->timestamps();
        });

        DB::table('facilities')->insert(array(
            [
                'facility' => 'Damai Golf & country club',
                'ta_id' => 1,
                'sarawakian_field' => 0,
                'facility_remark' => 'Green fees (18 holes)',
                'facility_status' => 1,
            ],
            [
                'facility' => 'Sarawak Cultural Village',
                'ta_id' => 1,
                'sarawakian_field' => 1,
                'facility_remark' => '-',
                'facility_status' => 1,
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
        Schema::dropIfExists('facilities');
    }
}
