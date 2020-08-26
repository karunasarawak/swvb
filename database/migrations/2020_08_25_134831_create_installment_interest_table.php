<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentInterestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installment_interests', function (Blueprint $table) {
            $table->id('ii_id');
            $table->integer('instal_duration')->length(3)->nullable();
            $table->decimal('interest_rate',4,2)->nullable();
            $table->timestamps();
        });

        DB::table('installment_interests')->insert(
            array(
                ['instal_duration' => '3','interest_rate'=>0],
                ['instal_duration' => '6','interest_rate'=>0],
                ['instal_duration' => '9','interest_rate'=>0],
                ['instal_duration' => '12','interest_rate'=>0],
                ['instal_duration' => '24','interest_rate'=>2],
                ['instal_duration' => '36','interest_rate'=>3],
                ['instal_duration' => '48','interest_rate'=>4],
                ['instal_duration' => '60','interest_rate'=>5],
                ['instal_duration' => '72','interest_rate'=>10]
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
        Schema::dropIfExists('installment_interests');
    }
}
