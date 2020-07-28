<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesMarketingAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_marketing_agency', function (Blueprint $table) {
            $table->id('ma_id');
            $table->string('ma_name', 100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('sales_marketing_agency')->insert(
            array(
                ['ma_name' => 'AA'],
                ['ma_name' => 'BB'],
                ['ma_name' => 'CC']
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
        Schema::dropIfExists('sales_marketing_agency');
    }
}
