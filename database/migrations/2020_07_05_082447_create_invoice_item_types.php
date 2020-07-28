<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_item_types', function (Blueprint $table) {
            $table->id('inv_itm_type_id');
            $table->foreignId('acc_code')->nullable();
            $table->string('item', 255);
            $table->tinyInteger('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('invoice_item_types')->insert(
            array(
                ['item' => 'Installment'],
                ['item' => 'AMF'],
                ['item' => 'Admin Charges'],
                ['item' => 'Reservation Fee'],
                ['item' => 'Extra Service Charges'],
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
        Schema::dropIfExists('invoice_item_types');
    }
}
