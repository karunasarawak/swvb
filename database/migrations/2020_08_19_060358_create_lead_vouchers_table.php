<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_vouchers', function (Blueprint $table) {
            $table->id('lv_id');
            $table->integer('lead_id')->length(11)->nullable();
            $table->integer('voucher_id')->length(11)->nullable();

            $table->timestamps();
        });

        DB::table('lead_vouchers')->insert(array(
            [
                'lead_id' => 1,
                'voucher_id' => 1,
            ],
            [
                'lead_id' => 2,
                'voucher_id' => 1,
            ],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_vouchers');
    }
}
