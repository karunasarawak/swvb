<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_role', function (Blueprint $table) {
            $table->id('sales_role_id');
            $table->string('sales_role', 50)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('sales_role')->insert(
            array(
                ['sales_role' => 'Telemarketer'],
                ['sales_role' => 'Sales Personnel'],
                ['sales_role' => 'Sales Manager'],
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
        Schema::dropIfExists('sales_role');
    }
}
