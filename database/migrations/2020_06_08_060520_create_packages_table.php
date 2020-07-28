<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id('package_id')->length(11);
            $table->string('package_name',50);
            $table->decimal('amf',4,2);
            $table->string('package_desc',255);
            $table->integer('wd')->length(2);
            $table->integer('we')->length(2);
            $table->integer('pts')->length(6);
            $table->timestamps();
        });

        DB::table('packages')->insert(
            array(
                ['package_name' => 'AAA', 'amf' => 10, 'package_desc' => 'N/A', 'wd' => 3, 'we'=>2, 'pts'=>100],
                ['package_name' => 'BBB', 'amf' => 20, 'package_desc' => 'N/A', 'wd' => 3, 'we'=>4, 'pts'=>200],
                ['package_name' => 'CCC', 'amf' => 30, 'package_desc' => 'N/A', 'wd' => 4, 'we'=>5, 'pts'=>300],
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
        Schema::dropIfExists('packages');
    }
}
