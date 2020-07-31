<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminpermissions', function (Blueprint $table) {
            $table->id('permission_id');
            $table->integer('role_id')->length(11)->nullable();
            $table->integer('module_id')->length(3)->nullable();
            $table->tinyInteger('check')->length(1)->nullable();
            $table->tinyInteger('check2')->length(1)->nullable();
            $table->tinyInteger('verify')->length(1)->nullable();
            $table->tinyInteger('verify2')->length(1)->nullable();
            $table->tinyInteger('approve')->length(1)->nullable();
            $table->tinyInteger('approve2')->length(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminpermissions');
    }
}
