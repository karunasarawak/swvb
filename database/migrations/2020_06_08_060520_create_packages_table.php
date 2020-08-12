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
            $table->string('package',50)->nullable();
            $table->string('package_code',10)->nullable();
            $table->integer('no_of_package')->length(4)->nullable();
            $table->integer('package_wd')->length(2)->nullable();
            $table->integer('package_we')->length(1)->nullable();
            $table->integer('package_pts')->length(6)->nullable();
            $table->integer('package_price')->length(5)->nullable();
            $table->string('package_desc', 80)->nullable();
            $table->decimal('package_amf',6,2)->nullable();
            $table->integer('package_term')->length(2)->nullable();
            $table->integer('usage_year')->length(2)->nullable();
            $table->integer('package_status')->length(1)->nullable();

            $table->timestamps();
        });

        DB::table('packages')->insert(
            array(
                ['package' => 'Pearl Full Term Family', 'package_code' => 'PFF', 'no_of_package' => '100', 'package_wd' => 3, 'package_we'=>2, 'package_pts'=>100, 'package_price'=>100, 'package_desc'=>100, 'package_amf'=>100, 'package_term'=>25, 'usage_year'=>0, 'package_status'=>1],
                ['package' => 'Pearl Odd Premier', 'package_code' => 'PFO', 'no_of_package' => '100', 'package_wd' => 3, 'package_we'=>2, 'package_pts'=>100, 'package_price'=>100, 'package_desc'=>100, 'package_amf'=>100, 'package_term'=>25, 'usage_year'=>1, 'package_status'=>1],
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
