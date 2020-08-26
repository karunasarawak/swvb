<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationBreakfastPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_breakfast_prices', function (Blueprint $table) {
            $table->id('rsvn_bf_pr_id');
            $table->integer('rsvn_type_id')->length(11)->nullable();
            $table->integer('accom_id')->length(11)->nullable();
            $table->integer('min_pax')->length(1)->nullable();
            $table->integer('max_pax')->length(1)->nullable();
            $table->tinyInteger('price_unit')->length(1)->nullable();
            $table->decimal('price_per_pax', 6, 2)->nullable();

            $table->timestamps();
        });

        DB::table('reservation_breakfast_prices')->insert(array(
            [
                'rsvn_type_id' => 1,
                'accom_id' => 1,
                'min_pax' => 1,
                'max_pax' => 3,
                'price_unit' => 1,
                'price_per_pax' => 300,
            ],
            [
                'rsvn_type_id' => 1,
                'accom_id' => 1,
                'min_pax' => 4,
                'max_pax' => 0,
                'price_unit' => 1,
                'price_per_pax' => 300,
            ],
            [
                'rsvn_type_id' => 1,
                'accom_id' => 1,
                'min_pax' => 1,
                'max_pax' => 3,
                'price_unit' => 1,
                'price_per_pax' => 300,
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
        Schema::dropIfExists('reservation_breakfast_prices');
    }
}
