<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->id('terminal_id')->length(11);
            $table->string('tid', 255)->nullable();
            $table->string('mid', 255)->nullable();
            $table->string('epp', 255)->nullable();
            $table->string('charge_type', 255)->nullable();
            $table->decimal('bank_charges', 9, 2)->nullable();
            $table->string('merchant_bank', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('terminals')->insert(
            array(
                ['tid' => '00569958', 'mid' => '3300612675', 'epp' => '12', 'charge_type' => 'MOT', 'bank_charges' => '7.00', 'merchant_bank' => 'AMEX'],
                ['tid' => '13045582', 'mid' => '000001090105818', 'epp' => '24', 'charge_type' => 'MAN', 'bank_charges' => '4.50', 'merchant_bank' => 'CIMB'],
                ['tid' => '9872906854', 'mid' => '001-111103586', 'epp' => '36', 'charge_type' => 'EPP-MOTO', 'bank_charges' => '6.00', 'merchant_bank' => 'MBB'],
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
        Schema::dropIfExists('terminals');
    }
}
