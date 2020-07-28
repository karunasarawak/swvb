<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLogsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_logs_category', function (Blueprint $table) {
            $table->id('el_cat_id');
            $table->string('el_cat_abbr', 20)->nullable();
            $table->string('el_cat_name', 50)->nullable();
            $table->timestamps();
        });

        DB::table('event_logs_category')->insert(
            array(
                ['el_cat_abbr'=>'TOR','el_cat_name'=>'Tour'],
                ['el_cat_abbr'=>'PRC','el_cat_name'=>'ProCall'],
                ['el_cat_abbr'=>'AFS','el_cat_name'=>'AfterSale'],
                ['el_cat_abbr'=>'MSC','el_cat_name'=>'Msc'],
                ['el_cat_abbr'=>'II','el_cat_name'=>'II'],
                ['el_cat_abbr'=>'PRD','el_cat_name'=>'Product'],
                ['el_cat_abbr'=>'RSVN','el_cat_name'=>'Reservation'],
                ['el_cat_abbr'=>'RFD','el_cat_name'=>'Refund'],
                ['el_cat_abbr'=>'CLT','el_cat_name'=>'Collect'],
                ['el_cat_abbr'=>'EXM','el_cat_name'=>'ExtMem'],
                ['el_cat_abbr'=>'ENT','el_cat_name'=>'Entitlement'],
                ['el_cat_abbr'=>'PYM','el_cat_name'=>'Payment'],
                ['el_cat_abbr'=>'WD','el_cat_name'=>'Wd-Cxl'],
                ['el_cat_abbr'=>'WC','el_cat_name'=>'WC'],
                ['el_cat_abbr'=>'OTH','el_cat_name'=>'Others'],
                ['el_cat_abbr'=>'AGR','el_cat_name'=>'AGR'],
                ['el_cat_abbr'=>'MBS','el_cat_name'=>'Membership'],
                ['el_cat_abbr'=>'SRV','el_cat_name'=>'Service'],
                ['el_cat_abbr'=>'AGT','el_cat_name'=>'Agents'],
                ['el_cat_abbr'=>'RCI','el_cat_name'=>'RCI Enrolment'],
                ['el_cat_abbr'=>'PTS','el_cat_name'=>'Points'],
                ['el_cat_abbr'=>'ICT','el_cat_name'=>'Incentive'],
                ['el_cat_abbr'=>'CTC','el_cat_name'=>'CourtesyCall'],
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
        Schema::dropIfExists('event_logs_category');
    }
}
