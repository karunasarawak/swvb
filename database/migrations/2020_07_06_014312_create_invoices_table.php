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
            $table->decimal('items_amount', 9, 2)->nullable();
            $table->decimal('tax_amount', 9, 2)->nullable();
            $table->decimal('rounding', 3, 2)->nullable();
            $table->decimal('total', 9, 2)->nullable();
            $table->string('inv_disc_method', 10)->nullable();
            $table->decimal('inv_disc', 9, 2)->nullable();
            $table->string('inv_disc_note', 30)->nullable();
            $table->string('tax', 6)->nullable();
            $table->string('tax_note', 30)->nullable();
            $table->string('remark', 255)->nullable();
            $table->date('issue_date')->nullable();
            $table->tinyInteger('inv_status')->length(1)->default('1');
            $table->integer('inv_creator')->length(11)->nullable();
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
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('invoices');
    }
}
