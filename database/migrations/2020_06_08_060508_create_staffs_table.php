<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->integer('role_id')->length(11);
            $table->text('staff_name',50);
            $table->text('staff_fullname',50)->nullable();
            $table->string('staff_code', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->tinyInteger('is_active')->length(1)->default('0');
            $table->timestamps();
        });

        DB::table('staff')->insert(
            array(
                ['staff_name' => 'Bisil Kanyong','staff_code' => 'FM' ,'role_id'=>1,'is_active'=>1],
                ['staff_name' => 'Claudia', 'staff_code' => 'CCE', 'role_id'=>2,'is_active'=>1],
                ['staff_name' => 'Rohanah', 'staff_code' => 'MRE', 'role_id'=>3,'is_active'=>1],
                ['staff_name' => 'Audrey', 'staff_code' => 'MRM', 'role_id'=>4,'is_active'=>1],
                ['staff_name' => 'Erman', 'staff_code' => 'ICT01', 'role_id'=>5,'is_active'=>1],
                ['staff_name' => 'Darween', 'staff_code' => 'ICT02', 'role_id'=>5,'is_active'=>1],
                ['staff_name' => 'Yeo Ying Ying', 'staff_code' => 'MSE', 'role_id'=>6,'is_active'=>1]
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
        Schema::dropIfExists('staff');
    }
}
