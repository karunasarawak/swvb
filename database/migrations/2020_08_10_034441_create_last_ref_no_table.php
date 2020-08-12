<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastRefNoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_ref_no', function (Blueprint $table) {
            $table->id('last_ref_id');
            $table->string('last_cai_mbrship_no', 11)->nullable();
            $table->string('last_evc_mbrship_no', 11)->nullable();
            $table->string('last_be_back_mbrship_no', 11)->nullable();
            $table->string('last_staff_no', 11)->nullable();
            $table->string('last_comp_no', 11)->nullable();
            $table->string('last_pict_no', 15)->nullable();
            $table->string('last_aict_no', 15)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('last_ref_no');
    }
}
