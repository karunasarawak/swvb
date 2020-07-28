<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_venues', function (Blueprint $table) {
            $table->increments('sales_venue_id');
            $table->string('venue_name', 60)->nullable();
            $table->tinyInteger('venue_status')->nullable();
            $table->timestamps();
        });

        DB::table('sales_venues')->insert(
            array(
                ['venue_name' => 'Sarawak Plaza', 'venue_status'=>1],
                ['venue_name' => 'Merdeka Plaza', 'venue_status'=>0],
                ['venue_name' => 'Starbuck', 'venue_status'=>1],
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
        Schema::dropIfExists('sales_venues');
    }
}
