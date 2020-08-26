<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id('guest_id');
            $table->integer('rsvn_rooms_id')->length(11)->nullable();
            $table->integer('salutation_id')->length(11)->nullable();
            $table->string('guest_name')->nullable();
            $table->string('contact_no',14)->nullable();
            $table->string('guest_nric',15)->nullable();
            $table->string('passport',8)->nullable();
            $table->tinyInteger('malaysian')->nullable();
            $table->string('guest_remark')->nullable();
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
        Schema::dropIfExists('guests');
    }
}
