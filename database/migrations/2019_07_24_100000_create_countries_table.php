<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id')->length(11);
            $table->string('country_name',50);
            $table->string('short_code',5);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('countries')->insert(
            array(
                ['country_name' => 'Malaysia', 'short_code'=>'MY'],
                ['country_name' => 'Brunei', 'short_code'=>'BN'],
                ['country_name' => 'Thailand', 'short_code'=>'TH'],
                ['country_name' => 'Singapore', 'short_code'=>'SG'],
                ['country_name' => 'Bangladesh', 'short_code'=>'BD'],
            )
        );
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }


}
