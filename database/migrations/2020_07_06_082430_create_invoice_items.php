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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
