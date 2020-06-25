<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('addr_id')->length(11);
            $table->string('addr_1',100);
            $table->string('addr_2',100);
            $table->string('addr_3',100);
            $table->string('addr_4',100);
            $table->string('state',100);
            $table->string('city',100);
            $table->tinyInteger('is_pri')->length(1);
            $table->string('country',60);
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
        Schema::dropIfExists('addresses');
    }
}
