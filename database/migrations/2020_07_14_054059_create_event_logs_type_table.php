<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLogsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_logs_type', function (Blueprint $table) {
            $table->id('el_type_id');
            $table->integer('el_cat_id')->length(11)->nullable();
            $table->string('el_type_abbr', 20)->nullable();
            $table->string('el_type_name', 50);
            $table->timestamps();
        });

        DB::table('event_logs_type')->insert(
            array(
                ['el_cat_id'=>1,'el_type_abbr'=>'CPT','el_type_name'=>'Complaint'],
                ['el_cat_id'=>1,'el_type_abbr'=>'DEF','el_type_name'=>'Default'],
                ['el_cat_id'=>1,'el_type_abbr'=>'ENQ','el_type_name'=>'Enquiry'],
                ['el_cat_id'=>1,'el_type_abbr'=>'RMD','el_type_name'=>'Reminder'],
                ['el_cat_id'=>1,'el_type_abbr'=>'OTH','el_type_name'=>'Others'],
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
        Schema::dropIfExists('event_logs_type');
    }
}
