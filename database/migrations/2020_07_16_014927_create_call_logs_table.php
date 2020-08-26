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
        Schema::dropIfExists('call_logs');
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
            $table->tinyInteger('com_channel_id')->nullable();
            $table->string('remarks', 255)->nullable();
            $table->tinyInteger('cl_status')->default(0);
            $table->timestamps();
        });

        DB::table('call_logs')->insert(array(
            ['el_id'=>1, 'lead_id'=>1, 'init_date'=>'2020-06-06', 'init_time'=>'14:30:00','call_length'=>30, 'start_time'=>'13:30:00','end_time'=>'14:00:00',
            'outcome'=>'Rejected','reason'=>'-','com_channel_id'=>1, 'remarks'=>'-'],
            ['el_id'=>1, 'lead_id'=>1, 'init_date'=>'2020-06-07', 'init_time'=>'14:30:00','call_length'=>30, 'start_time'=>'13:30:00','end_time'=>'14:00:00',
            'outcome'=>'Rejected','reason'=>'-','com_channel_id'=>2, 'remarks'=>'-'],
        ));
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
