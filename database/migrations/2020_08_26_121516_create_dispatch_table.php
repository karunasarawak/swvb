<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch', function (Blueprint $table) {
            $table->id('dispatch_id');
            $table->integer('mbrship_no')->nullable();
            $table->integer('el_id')->nullable();
            $table->integer('el_type_id')->nullable();
            $table->integer('el_cat_id')->nullable();
            $table->string('consignment_note')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        DB::table('dispatch')->insert(array(
            ['mbrship_no'=>100010000, 'el_id'=>'1','el_type_id'=>'3','el_cat_id'=>'5','consignment_note'=>'1234567','remarks'=>'-','status'=>'Delivered'],
            ['mbrship_no'=>200010000, 'el_id'=>'2','el_type_id'=>'4','el_cat_id'=>'6','consignment_note'=>null,'remarks'=>'-','status'=>'Undelivered'],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispatch');
    }
}
