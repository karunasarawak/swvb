<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('inventories');
        Schema::create('inventories', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->integer('unit_type_id')->length(11)->nullable();
            $table->string('unit_no')->length(30)->nullable();
            $table->tinyInteger('inventory_status')->length(1)->nullable();
            $table->timestamps();
        });

        DB::table('inventories')->insert(array(
            [
                'unit_type_id' => 1,
                'unit_no' => '201',
                'inventory_status' => 1,
            ],
            [
                'unit_type_id' => 2,
                'unit_no' => '202',
                'inventory_status' => 1,
            ],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
