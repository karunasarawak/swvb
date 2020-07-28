<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditNoteTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_note_types', function (Blueprint $table) {
            $table->id('cn_type_id')->length(11);
            $table->string('cn_type', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('credit_note_types')->insert(
            array(
                ['cn_type' => 'Normal'],
                ['cn_type' => 'POS'],
                ['cn_type' => 'Write Off'],
                ['cn_type' => 'Cancelled'],
                ['cn_type' => 'Withdrawal'],
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
        Schema::dropIfExists('credit_note_types');
    }
}
