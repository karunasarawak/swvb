<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_logs', function (Blueprint $table) {
            $table->id('el_id');
            $table->integer('el_type_id')->length(11)->nullable();
            $table->integer('el_cat_id')->length(11)->nullable();
            $table->integer('lead_id')->length(11)->nullable();
            $table->tinyInteger('customer_type')->nullable();
            $table->string('title',50)->nullable();
            $table->string('last_updated_by',50)->nullable();
            $table->string('created_by',50)->nullable();
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
        Schema::dropIfExists('event_logs');
    }
}
