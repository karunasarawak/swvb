<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_type', function (Blueprint $table) {
            $table->id('doc_id');
            $table->string('doc_type', 20);
            $table->timestamps();
        });

        DB::table('documents_type')->insert(
            array(
                ['doc_type'=>'Credit Note'],
                ['doc_type'=>'Debit Note'],
                ['doc_type'=>'Refund'],
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
        Schema::dropIfExists('documents_type');
    }
}
