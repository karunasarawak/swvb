<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('tour_id');
            $table->integer('lead_id1')->nullable();
            $table->integer('lead_id2')->nullable();

            $table->integer('sales_personnel_id')->nullable();
            $table->integer('sales_manager_id')->nullable();
            $table->integer('sales_venue_id')->nullable();
            $table->integer('voucher_id')->length(11)->nullable();
            // $table->integer('telemarketer_id')->nullable();
            // $table->integer('salutation_id')->nullable();;
            // $table->integer('el_id')->nullable();

            $table->date('tour_date')->nullable();
            $table->time('tour_initial_time')->nullable();
            $table->time('tour_time_in')->nullable();
            $table->time('tour_time_out')->nullable();


            $table->string('tour_marketing_agency', 60)->nullable();
            $table->tinyInteger('tour_no_of_children')->nullable();
            $table->tinyInteger('tour_outcome')->nullable();
            $table->string('tour_remarks', 255)->nullable();
            $table->decimal('tour_month_income',9,2)->nullable();
            $table->tinyInteger('tour_proceed_contract')->nullable();
            $table->tinyInteger('tour_attend')->nullable();
            $table->integer('tour_status')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
