<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIctRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ict_requests', function (Blueprint $table) {
            $table->id('pict_req_id')->length(11);
            $table->integer('pict_staff_id')->length(11)->nullable();
            $table->integer('rsvn_id')->length(11)->nullable();
            $table->integer('pict_mbrship_id')->length(11)->nullable();
            $table->integer('pict_req_by')->length(11)->nullable();
            $table->integer('pict_processed')->length(11)->nullable();
            $table->integer('use_year')->length(4)->nullable();
            $table->integer('wd_points')->length(6)->nullable();
            $table->date('proposed_expdate')->nullable();
            $table->date('pict_req_created_at')->nullable();
            $table->integer('we')->length(2)->nullable();
            $table->integer('poe')->length(11)->nullable();
            $table->integer('pict_approval')->length(11)->nullable();
            $table->integer('pict_verifier')->length(11)->nullable();
            
            
            $table->tinyInteger('pict_req_status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ict_requests');
    }
}
