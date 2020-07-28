<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_logs', function (Blueprint $table) {
            $table->increments('cl_id');
            $table->foreignId('el_id');
            $table->foreignId('lead_id');
            $table->date('init_date')->nullable();
            $table->time('init_time')->nullable();
            $table->integer('call_length')->length(5)->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('outcome', 30)->nullable();
            $table->string('reason', 30)->nullable();
            $table->tinyInteger('com_channel')->nullable();
            $table->string('remarks', 255)->nullable();
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
        Schema::dropIfExists('call_logs');
    }
}
