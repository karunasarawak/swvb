<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('inv_id')->length(11);
            $table->integer('inv_no')->length(11);
            $table->foreignId('mbrship_id');
            $table->foreign('mbrship_id')->references('mbrship_id')->on('memberships');

            $table->string('mbrship_name', 60)->nullable();
            $table->string('type', 60)->nullable();
            //subtotal
            $table->decimal('items_amount', 9, 2)->nullable();
            $table->decimal('tax_amount', 11, 2)->nullable();
            $table->decimal('rounding', 5, 2)->nullable();
            $table->string('inv_disc_method', 10)->nullable();
            $table->decimal('inv_disc', 9, 2)->nullable();
            $table->string('inv_disc_note', 30)->nullable();
            $table->string('tax', 6)->nullable();
            $table->string('tax_note', 30)->nullable();
            $table->decimal('total', 11, 2)->nullable();
            $table->string('remark', 255)->nullable();
            $table->decimal('balance', 10, 8)->nullable();
            $table->date('issue_date')->nullable();
            $table->tinyInteger('inv_status')->length(1)->default('1');
            $table->integer('inv_creator')->length(11)->nullable();
            $table->timestamps();
        });

        DB::table('invoices')->insert(array(
            [
                'inv_no' => '10001',
                'mbrship_id' => 1,
                'mbrship_name' => 'John Doe',
                'type' => 'Other',
                'items_amount' => 50,
                'tax_amount' => 3,
                'tax' => '6%',
                'tax_note' => 'SST',
                'inv_disc_method' => 'RM',
                'inv_disc' => 10,
                'inv_disc_note' => 'RM 10 discount',
                'rounding' => 0,
                'total' => 230,
                'balance' => 0,
                'remark' => 'Remarkss',
                'issue_date' => '2020-08-19',
                'inv_status' => 1,
                'inv_creator' => null,
            ],
            [       
                'inv_no' => '10002',
                'mbrship_id' => 1,
                'mbrship_name' => 'John Doe',
                'type' => 'Other',
                'items_amount' => 50,
                'tax_amount' => 3,
                'tax' => '6%',
                'tax_note' => 'SST',
                'inv_disc_method' => 'RM',
                'inv_disc' => 10,
                'inv_disc_note' => 'RM 10 discount',
                'rounding' => 0,
                'total' => 230,
                'balance' => 0,
                'remark' => 'Remarkss',
                'issue_date' => '2020-08-19',
                'inv_status' => 1,
                'inv_creator' => null,
            ],
            [
                'inv_no' => '10003',
                'mbrship_id' => 1,
                'mbrship_name' => 'Mary Jane',
                'type' => 'Other',
                'items_amount' => 50,
                'tax_amount' => 3,
                'tax' => '6%',
                'tax_note' => 'SST',
                'inv_disc_method' => 'RM',
                'inv_disc' => 10,
                'inv_disc_note' => 'RM 10 discount',
                'rounding' => 0,
                'total' => 230,
                'balance' => 0,
                'remark' => 'Remarkss',
                'issue_date' => '2020-08-19',
                'inv_status' => 1,
                'inv_creator' => null,
            ],
            [
                'inv_no' => '10004',
                'mbrship_id' => 2,
                'mbrship_name' => 'Mary Jane',
                'type' => 'Other',
                'items_amount' => 50,
                'tax_amount' => 3,
                'tax' => '6%',
                'tax_note' => 'SST',
                'inv_disc_method' => 'RM',
                'inv_disc' => 10,
                'inv_disc_note' => 'RM 10 discount',
                'rounding' => 0,
                'total' => 50,
                'balance' => 0,
                'remark' => 'Remarkss',
                'issue_date' => '2020-08-19',
                'inv_status' => 1,
                'inv_creator' => null,
            ],
            [
                'inv_no' => '10005',
                'mbrship_id' => 2,
                'mbrship_name' => 'Mary Jane',
                'type' => 'Other',
                'items_amount' => 50,
                'tax_amount' => 3,
                'tax' => '6%',
                'tax_note' => 'SST',
                'inv_disc_method' => 'RM',
                'inv_disc' => 10,
                'inv_disc_note' => 'RM 10 discount',
                'rounding' => 0,
                'total' => 50,
                'balance' => 0,
                'remark' => 'Remarkss',
                'issue_date' => '2020-08-19',
                'inv_status' => 1,
                'inv_creator' => null,
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
        Schema::dropIfExists('invoices');
    }
}
