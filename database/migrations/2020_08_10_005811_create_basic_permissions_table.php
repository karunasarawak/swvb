<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_permissions', function (Blueprint $table) {
            $table->id('bpermission_id');
            $table->integer('staff_id')->length(11);
            $table->tinyInteger('action')->length(1);
            $table->tinyInteger('check_status')->length(1)->default(0);
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
        Schema::dropIfExists('basic_permissions');
    }
}
