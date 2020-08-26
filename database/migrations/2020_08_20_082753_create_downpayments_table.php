<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downpayments', function (Blueprint $table) {
            $table->id('dpymt_id');
            $table->integer('install_id')->length(11)->nullable();
            $table->integer('inv_id')->length(11)->nullable();
            $table->decimal('dpymt', 10, 2)->nullable();
            $table->date('projected_allocated_date')->nullable();
            $table->date('alloc_date')->nullable();

            $table->timestamps();
        });

        DB::table('downpayments')->insert(array(
            [
                'install_id' => 1,
                'inv_id' => null,
                'dpymt' => 3500,
                'projected_allocated_date' => '2020-09-19',
                'alloc_date' => '2020-09-19',
            ],
            [
                'install_id' => 1,
                'inv_id' => null,
                'dpymt' => 3500,
                'projected_allocated_date' => '2020-10-19',
                'alloc_date' => '2020-10-19',
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
        Schema::dropIfExists('downpayments');
    }
}
