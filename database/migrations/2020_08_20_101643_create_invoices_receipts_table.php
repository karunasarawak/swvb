<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_receipts', function (Blueprint $table) {
            $table->id('inv_rcpt_id');
            $table->integer('inv_id')->length(11)->nullable();
            $table->integer('receipt_id')->length(11)->nullable();

            $table->timestamps();
        });

        DB::table('invoices_receipts')->insert(array(
            [
                'inv_id' => 1,
                'receipt_id' => 1,
            ],
            [
                'inv_id' => 2,
                'receipt_id' => 2,
            ],
            [
                'inv_id' => 3,
                'receipt_id' => 3,
            ],
            [
                'inv_id' => 4,
                'receipt_id' => 4,
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
        Schema::dropIfExists('invoices_receipts');
    }
}
