<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTravelDetailToRrcibbReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rcibb_reservations', function (Blueprint $table) {
            $table->string('travel_detail')->nullable();
            $table->string('unit_size')->change();
            $table->integer('unit_id')->length(11)->change();
            $table->integer('resort_id')->length(11)->change();
        });
        Schema::table('rci_bulk_bankings', function (Blueprint $table) {
            $table->integer('sub_batch')->length(2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rcibb_reservations', function (Blueprint $table) {
            $table->dropColumn('travel_detail');
        });
        Schema::table('rci_bulk_bankings', function (Blueprint $table) {
            $table->dropColumn('sub_batch');
        });
    }
}
