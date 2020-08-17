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
            $table->integer('lead_id1')->length(11)->nullable();
            $table->integer('lead_id2')->length(11)->nullable();

            $table->integer('sales_personnel_id')->nullable();
            $table->integer('sales_manager_id')->nullable();
            $table->integer('sales_venue_id')->nullable();
            $table->integer('voucher_id')->length(11)->nullable();

            $table->date('tour_date')->nullable();
            $table->time('tour_initial_time')->nullable();
            $table->time('tour_time_in')->nullable();
            $table->time('tour_time_out')->nullable();

            $table->integer('tour_state')->nullable();
            $table->integer('tour_city')->nullable();

        $table->string('tour_marketing_agency', 60)->nullable()
            $table->tinyInteger('tour_no_of_children')->nullable();
            $table->tinyInteger('tour_outcome')->nullable();
            $table->string('tour_remarks', 255)->nullable();
            $table->decimal('tour_month_income',9,2)->nullable();
            $table->tinyInteger('tour_proceed_contract')->nullable();
            $table->tinyInteger('tour_attend')->default(0);
            $table->tinyInteger('is_archive')->default(1);

            $table->timestamps();
        });

        
        DB::table('tours')->insert(
            array(
                ['lead_id1' => '1', 'tour_initial_time' => '11:30', 'sales_venue_id' => '2', 'sales_personnel_id'=> '1', 'tour_state'=> '1', 'tour_city'=> '1', 'created_at'=>"2020-10-05 14:20:20",'updated_at'=>"2020-10-05 14:20:20"],
                ['lead_id1' => '2', 'tour_initial_time' => '16:30', 'sales_venue_id' => '1', 'sales_personnel_id'=> '2', 'tour_state'=> '2', 'tour_city'=> '2', 'created_at'=>"2020-10-05 14:20:20",'updated_at'=>"2020-10-05 14:20:20"],
                ['lead_id1' => '3', 'tour_initial_time' => '12:30', 'sales_venue_id' => '1', 'sales_personnel_id'=> '3', 'tour_state'=> '3', 'tour_city'=> '3', 'created_at'=>"2020-10-05 14:20:20",'updated_at'=>"2020-10-05 14:20:20"]
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
        Schema::dropIfExists('tours');
    }
}
{{  }}