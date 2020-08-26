<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepurchasePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('repurchase_price');
        Schema::create('repurchase_price', function (Blueprint $table) {
            $table->id('rp_id');
            $table->integer('term')->length(11)->nullable();
            $table->integer('package_id')->length(11)->nullable();
            $table->string('unit')->length(20)->nullable();
            $table->decimal('value')->nullable();
            $table->timestamps();
        });

        DB::table('repurchase_price')->insert(
            array([
                    'term' => '1',
                    'package_id' => '1',
                    'unit' => '%',
                    'value'=> '34'
                ],
                [
                    'term' => '2',
                    'package_id' => '1',
                    'unit' => '%',
                    'value'=> '22'
                ],
                [
                    'term' => '3',
                    'package_id' => '1',
                    'unit' => 'RM',
                    'value'=> '1'
                ]
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
        Schema::dropIfExists('repurchase_price');
    }
}
