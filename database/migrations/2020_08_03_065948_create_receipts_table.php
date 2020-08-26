<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id('receipt_id')->length(11);
            $table->integer('refund_id')->length(11)->nullable();
            $table->integer('receipt_no')->length(11);
            $table->string('collected_by', 60)->nullable();
            $table->string('pymt_method', 60)->nullable();
            $table->string('bank_in_to', 60)->nullable();
            $table->string('bank_in_ref_no', 60)->nullable();
            $table->decimal('receipt_prepayment', 9, 2)->nullable();
            $table->date('clearance_date')->nullable();
            $table->date('issue_date')->nullable();
            $table->decimal('receipt_amount', 10, 2)->nullable();
            $table->tinyInteger('receipt_status')->integer(1)->nullable();
            $table->string('receipt_remark', 255)->nullable();
            $table->integer('created_by')->length(11)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('receipts')->insert(array(
            [
                'refund_id' => null,
                'receipt_no' => 10001,
                'collected_by' => null,
                'pymt_method' => null,
                'bank_in_to' => null,
                'bank_in_ref_no' => null,
                'receipt_prepayment' => 0,
                'clearance_date' => '2020-08-21',
                'issue_date' => '2020-08-19',
                'receipt_amount' => 230,
                'receipt_status' => 1,
                'receipt_remark' => 'remarkss',
                'created_by' => null,
            ],
            [
                'refund_id' => null,
                'receipt_no' => 10002,
                'collected_by' => null,
                'pymt_method' => null,
                'bank_in_to' => null,
                'bank_in_ref_no' => null,
                'receipt_prepayment' => 0,
                'clearance_date' => '2020-08-21',
                'issue_date' => '2020-08-19',
                'receipt_amount' => 230,
                'receipt_status' => 1,
                'receipt_remark' => 'remarkss',
                'created_by' => null,
            ],
            [
                'refund_id' => null,
                'receipt_no' => 10003,
                'collected_by' => null,
                'pymt_method' => null,
                'bank_in_to' => null,
                'bank_in_ref_no' => null,
                'receipt_prepayment' => 0,
                'clearance_date' => '2020-08-21',
                'issue_date' => '2020-08-19',
                'receipt_amount' => 40,
                'receipt_status' => 1,
                'receipt_remark' => 'remarkss',
                'created_by' => null,
            ],
            [
                'refund_id' => null,
                'receipt_no' => 10004,
                'collected_by' => null,
                'pymt_method' => null,
                'bank_in_to' => null,
                'bank_in_ref_no' => null,
                'receipt_prepayment' => 0,
                'clearance_date' => '2020-08-21',
                'issue_date' => '2020-08-19',
                'receipt_amount' => 40,
                'receipt_status' => 1,
                'receipt_remark' => 'remarkss',
                'created_by' => null,
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('receipts');
    }
}
