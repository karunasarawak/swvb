<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalutationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salutations', function (Blueprint $table) {
            $table->id('salutation_id')->length(2);
            $table->string('salutation', 20);
            $table->timestamps();
        });
        
        DB::table('salutations')->insert(
            array(
                ['salutation' => 'Mr'],
                ['salutation' => 'Mrs'],
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
        Schema::dropIfExists('salutations');
    }
}
