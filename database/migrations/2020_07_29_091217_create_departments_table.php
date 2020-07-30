<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('departments', function (Blueprint $table) {
            $table->id('dept_id');
            $table->string('dept');
            $table->timestamps();
        });

        DB::table('departments')->insert(
            array(
                ['dept' => 'ICT', 'dept_id'=>1],
                ['dept' => 'MSD', 'dept_id'=>1],
                ['dept' => 'MRD', 'dept_id'=>1],
                ['dept' => 'ACC', 'dept_id'=>1],
                ['dept' => 'CCD', 'dept_id'=>1],
              
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
        Schema::dropIfExists('departments');
    }
}
