<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodation_categories', function (Blueprint $table) {
            $table->id('accom_cat_id');
            $table->string('accom_cat', 60)->nullable();
            $table->decimal('min_mbrship_paid', 5, 2)->nullable();
            $table->timestamps();
        });

        DB::table('accommodation_categories')->insert(array(
            [
                'accom_cat' => 'inventory',
                'min_mbrship_paid' => 0.3,
            ],
            [
                'accom_cat' => 'home based',
                'min_mbrship_paid' => 0.3,
            ],
            [
                'accom_cat' => 'internal affiliate',
                'min_mbrship_paid' => 0.5,
            ],
            [
                'accom_cat' => 'external affiliate',
                'min_mbrship_paid' => 0.5,
            ]
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodation_categories');
    }
}
