<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id('inv_itm_id')->length(11);
            $table->foreignId('inv_id');
            $table->foreign('inv_id')->references('inv_id')->on('invoices');
            $table->foreignId('inv_itm_type_id');
            $table->foreign('inv_itm_type_id')->references('inv_itm_type_id')->on('invoice_item_types');
            $table->string('item_name',255)->nullable();
            $table->decimal('amount', 9, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('invoice_items')->insert(array(
            [
                'inv_id' => 1,
                'inv_itm_type_id' => 2,
                'item_name' => 'Installment',
                'amount' => 230,
            ],
            [
                'inv_id' => 2,
                'inv_itm_type_id' => 2,
                'item_name' => 'Installment',
                'amount' => 230,
            ],
            [
                'inv_id' => 3,
                'inv_itm_type_id' => 2,
                'item_name' => 'Installment',
                'amount' => 230,
            ],
            [
                'inv_id' => 4,
                'inv_itm_type_id' => 4,
                'item_name' => 'Admin Charges',
                'amount' => 50,
            ],
            [
                'inv_id' => 5,
                'inv_itm_type_id' => 2,
                'item_name' => 'Installment',
                'amount' => 50,
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
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('invoice_items');
    }
}
