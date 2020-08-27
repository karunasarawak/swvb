<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_types', function (Blueprint $table) {
            $table->increments('cc_type_id', 11);
            $table->string('cc_type', 50)->nullable();
            $table->timestamps();
        });

        DB::table('credit_card_types')->insert(array(
            [
                'cc_type' => 'AMEX',
            ],
            [
                'cc_type' => 'Visa & Master',
            ]
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_card_types');
    }
}
