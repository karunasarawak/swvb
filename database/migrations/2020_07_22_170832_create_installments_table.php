<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('installments');
        Schema::create('installments', function (Blueprint $table) 
        {
            $table->id('install_id');
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->decimal('package_price')->length(11)->nullable();
            $table->integer('install_duration')->length(2)->nullable();
            $table->decimal('downpayment')->length(11)->nullable();
            $table->decimal('admin_charges')->length(11)->nullable();
            $table->decimal('addition', 10, 2)->nullable();
            $table->string('addition_remark', 500)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->string('discount_remark', 500)->nullable();
            $table->decimal('net_price')->length(11)->nullable();
            $table->decimal('outstanding')->length(11)->nullable();
            $table->timestamps();
        });

        DB::table('installments')->insert(array(
            [
                'install_id' => 1,
                'mbrship_id' => 1,
                'package_price' => 10000,
                'install_duration' => 18,
                'admin_charges' => 8.5,
                'addition' => 12.5,
                'discount' => 27.2,  
                'net_price' => 10024.2,                    
                'outstanding' => 5000
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
        Schema::dropIfExists('installments');
    }
}
