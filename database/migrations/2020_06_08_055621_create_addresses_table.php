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
            $table->id('addr_id')->length(11)->nullable();
            $table->integer('leads_id')->length(11)->nullable();
            $table->string('addr_1',100)->nullable();
            $table->string('addr_2',100)->nullable();
            $table->string('postcode',10)->nullable();
            $table->integer('city_id')->length(11)->nullable();
            $table->integer('state_id')->length(11)->nullable();
            $table->integer('country_id')->length(11)->nullable();
            $table->tinyInteger('is_primary')->length(1)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
