<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmenSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installment_schedules', function (Blueprint $table) {
            $table->id('is_id');
            $table->integer('install_id')->length(11)->nullable();
            $table->integer('inv_id')->length(11)->nullable();
            $table->decimal('net',8,2)->length(11)->nullable();
            $table->decimal('bank_charge',8,2)->length(1)->nullable();
            $table->decimal('balance',8,2)->length(11)->nullable();
            $table->date('projected_alloc_date')->nullable();
            $table->date('alloc_date')->nullable();
            $table->integer('term')->length(2)->nullable();
            $table->timestamps();
        });

        DB::table('installment_schedules')->insert(array(
            [
                'install_id' => 1,
                'inv_id' => 2,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 3144.54,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                   
                'term' => 1,
            ],  
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 3007.82,
                'projected_alloc_date' => '2020-10-12',
                'alloc_date' => '2020-10-12',                    
                'term' => 2,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2871.1,
                'projected_alloc_date' => '2020-11-12',
                'alloc_date' => '2020-11-12',                    
                'term' => 3,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2734.38,
                'projected_alloc_date' => '2020-12-12',
                'alloc_date' => '2020-12-12',                    
                'term' => 4,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2597.66,
                'projected_alloc_date' => '2021-01-12',
                'alloc_date' => '2021-01-12',                    
                'term' => 5,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2460.95,
                'projected_alloc_date' => '2021-02-12',
                'alloc_date' => '2021-02-12',                    
                'term' => 6,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2324.23,
                'projected_alloc_date' => '2021-03-12',
                'alloc_date' => '2021-03-12',                    
                'term' => 7,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2187.51,
                'projected_alloc_date' => '2021-04-12',
                'alloc_date' => '2021-04-12',                    
                'term' => 8,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 2050.79,
                'projected_alloc_date' => '2021-05-12',
                'alloc_date' => '2021-05-12',                    
                'term' => 9,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1914.07,
                'projected_alloc_date' => '2021-06-12',
                'alloc_date' => '2021-06-12',                    
                'term' => 10,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1777.35,
                'projected_alloc_date' => '2021-07-12',
                'alloc_date' => '2021-07-12',                    
                'term' => 11,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1640.63,
                'projected_alloc_date' => '2021-08-12',
                'alloc_date' => '2021-08-12',                    
                'term' => 12,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1503.91,
                'projected_alloc_date' => '2021-09-12',
                'alloc_date' => '2021-09-12',                    
                'term' => 13,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1367.19,
                'projected_alloc_date' => '2021-10-12',
                'alloc_date' => '2021-10-12',                    
                'term' => 14,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1230.47,
                'projected_alloc_date' => '2021-11-12',
                'alloc_date' => '2021-11-12',                    
                'term' => 15,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 1093.76,
                'projected_alloc_date' => '2021-12-12',
                'alloc_date' => '2021-12-12',                    
                'term' => 16,
            ],
          
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 957.04,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 17,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' =>820.32,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 18,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 683.60,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 19,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 546.88,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 20,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 410.16,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 21,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 273.44,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 22,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 136.72,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 23,
            ],
            [
                'install_id' => 1,
                'net' => 126.01,
                'bank_charge' => 10.71,
                'balance' => 0,
                'projected_alloc_date' => '2020-09-12',
                'alloc_date' => '2020-09-12',                    
                'term' => 24,
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
        Schema::dropIfExists('installmen_schedules');
    }
}
