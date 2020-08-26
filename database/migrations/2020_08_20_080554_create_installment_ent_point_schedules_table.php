<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentEntPointSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installment_ent_point_schedules', function (Blueprint $table) {
            $table->id('ieps_id');
            $table->integer('install_id')->length(11)->nullable();
            $table->integer('inv_id')->length(11)->nullable();
            $table->string('alloc_desc')->length(1000)->nullable();
            $table->integer('amount_allocated')->length(11)->nullable();
            $table->tinyInteger('unit_type')->length(1)->nullable();
            $table->integer('balance')->length(11)->nullable();
            $table->date('projected_alloc_date')->nullable();
            $table->date('alloc_date')->nullable();
            $table->date('exp_date')->nullable();
            $table->integer('term')->length(2)->nullable();

            $table->timestamps();
        });

        DB::table('installment_ent_point_schedules')->insert(array(
            [
                'install_id' => 1,
                'inv_id' => 1,
                'alloc_desc' => 'term allocation',
                'amount_allocated' => 4,
                'unit_type' => 1,
                'balance' => 4,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',  
                'exp_date' => '2022-09-12',                    
                'term' => 1,
            ],  
            [
                'install_id' => 1,
                'inv_id' => 1,
                'alloc_desc' => 'term allocation',
                'amount_allocated' => 3,
                'unit_type' => 2,
                'balance' => 0,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',  
                'exp_date' => '2022-09-12',
                'term' => 1,
            ],
            [
                'install_id' => 1,
                'inv_id' => 3,
                'alloc_desc' => 'term allocation',
                'amount_allocated' => 9,
                'unit_type' => 1,
                'balance' => 2,
                'projected_alloc_date' => '2021-09-12',
                'alloc_date' => '2021-09-12',  
                'exp_date' => '2023-09-12',                    
                'term' => 2,
            ],  
            [
                'install_id' => 1,
                'inv_id' => 3,
                'alloc_desc' => 'term allocation',
                'amount_allocated' => 6,
                'unit_type' => 2,
                'balance' => 4,
                'projected_alloc_date' => '2021-09-12',
                'alloc_date' => '2021-09-12',  
                'exp_date' => '2023-09-12',
                'term' => 2,
            ],
            [
                'install_id' => 2,
                'inv_id' => 7,
                'alloc_desc' => 'term allocation',
                'amount_allocated' => 10000,
                'unit_type' => 0,
                'balance' => 3000,
                'projected_alloc_date' => '2020-08-12',
                'alloc_date' => '2020-08-12',  
                'exp_date' => '2022-08-12',
                'term' => 3,
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
        Schema::dropIfExists('installment_ent_point_schedules');
    }
}
