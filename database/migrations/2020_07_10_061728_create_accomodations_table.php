<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('accomodation', function (Blueprint $table) {
            $table->id('accom_id')->length(11);
            $table->string('accom_name',60)->nullable();
            $table->string('accom_addr',255)->nullable();
            $table->tinyInteger('is_active')->length(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('accomodation')->insert(
            array(
                ['accom_name' => 'Sarawak Plaza', 'accom_addr'=>'N/A','is_active'=>'1'],
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
        Schema::dropIfExists('accomodations');
    }
}
