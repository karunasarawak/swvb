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
            
            $table->string('consignment_note')->length(20)->nullable();
            $table->string('mode')->length(20)->nullable();
            $table->string('dispatch_item')->length(50)->nullable();
            $table->date('dispatch_date')->nullable();
            $table->string('item_status')->length(10)->nullable();
            $table->string('remarks')->length(255)->nullable();

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
        Schema::dropIfExists('dispatch');
    }
}
