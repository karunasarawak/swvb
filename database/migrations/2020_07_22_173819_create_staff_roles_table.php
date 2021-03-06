<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_roles', function (Blueprint $table) {
            $table->id('role_id');
            $table->string('role', 30)->nullable();
            $table->string('code', 20)->nullable();
            $table->string('dept_id', 20)->nullable();
            $table->timestamps();
        });

        DB::table('staff_roles')->insert(
            array(
                ['role' => 'ACC', 'code'=>'ACC', 'dept_id'=>'4'],
                ['role' => 'CC', 'code'=>'CC', 'dept_id'=>'2'],
                ['role' => 'MRE', 'code'=>'MRE', 'dept_id'=>'3'],
                ['role' => 'MRM', 'code'=>'MRM', 'dept_id'=>'4'],
                ['role' => 'ICT', 'code'=>'ICT', 'dept_id'=>'1'],
                ['role' => 'MSE', 'code'=>'MSE', 'dept_id'=>'5']
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
        Schema::dropIfExists('staff_roles');
    }
}
