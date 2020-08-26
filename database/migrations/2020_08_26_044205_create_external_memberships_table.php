<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_memberships', function (Blueprint $table) {
            $table->id('ext_mbrship_id');
            $table->int('mbrship_id');
            $table->int('enrolled_by');
            $table->int('com_channel_id');            
            $table->tinyInteger('ext_membership_type');
            $table->int('ext_membership_no');
            $table->date('expiry_date');
            $table->date('request_date');
            $table->tinyInteger('enroll_status');
            $table->date('enrolled_date');
            $table->string('enroll_remarks')->length(1000);
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
        Schema::dropIfExists('external_membership');
    }
}
