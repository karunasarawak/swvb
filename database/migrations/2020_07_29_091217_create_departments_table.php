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
        Schema::disableForeignKeyConstraints();
        Schema::create('departments', function (Blueprint $table) {
            $table->id('dept_id');
            $table->string('dept')->nullable();
            $table->timestamps();
        });

        DB::table('departments')->insert(
            array(
                ['dept' => 'ICT'],
                ['dept' => 'MSD'],
                ['dept' => 'MRD'],
                ['dept' => 'ACC'],
                ['dept' => 'CCD'],
                ['dept' => 'Management'],
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
