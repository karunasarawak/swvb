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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id('staff_id')->length(11);
            $table->text('staff_name',100);
            $table->tinyInteger('staff_role_id');
            $table->tinyInteger('is_active')->length(1);
            $table->timestamps();
        });

        DB::table('staffs')->insert(
            array(
                ['staff_name' => 'Bisil Kanyong', 'staff_role_id'=>1,'is_active'=>1],
                ['staff_name' => 'Claudia', 'staff_role_id'=>2,'is_active'=>1],
                ['staff_name' => 'Rohanah', 'staff_role_id'=>3,'is_active'=>1],
                ['staff_name' => 'Audrey', 'staff_role_id'=>4,'is_active'=>1],
                ['staff_name' => 'Erman', 'staff_role_id'=>5,'is_active'=>1],
                ['staff_name' => 'Darween', 'staff_role_id'=>5,'is_active'=>1],
                ['staff_name' => 'Yeo Ying Ying', 'staff_role_id'=>6,'is_active'=>1]
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
        Schema::dropIfExists('staffs');
    }
}
