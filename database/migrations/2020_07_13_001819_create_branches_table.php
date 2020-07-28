<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id('id');
            $table->string('branch_name');
            $table->tinyInteger('is_sales_venue');
            $table->integer('city_id');
            $table->timestamps();
        });

        DB::table('branches')->insert(
            array(
                ['branch_name' => 'Sarawak Plaza', 'is_sales_venue'=>1, 'city_id'=>1],
                ['branch_name' => 'Merdeka Plaza', 'is_sales_venue'=>1, 'city_id'=>5]

            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
