<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('supplier_id');
            $table->string('supplier_name', 60)->nullable();
            $table->timestamps();
        });

        DB::table('suppliers')->insert(
            array(
                ['supplier_name'=> 'AA'],
                ['supplier_name'=> 'CC'],
                ['supplier_name'=> 'DD'],
                ['supplier_name'=> 'EE']
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
        Schema::dropIfExists('suppliers');
    }
}
