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
            $table->string('department', 20)->nullable();
            $table->timestamps();
        });

        DB::table('staff_roles')->insert(
            array(
                ['role' => 'FM', 'code'=>'FM', 'department'=>'FM'],
                ['role' => 'CCE', 'code'=>'CCE', 'department'=>'CCE'],
                ['role' => 'MRE', 'code'=>'MRE', 'department'=>'MRE'],
                ['role' => 'MRM', 'code'=>'MRM', 'department'=>'MRM'],
                ['role' => 'ICT', 'code'=>'ICT', 'department'=>'ICT'],
                ['role' => 'MSE', 'code'=>'MSE', 'department'=>'MSE']
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
