<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Accommodations;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id('accom_id')->length(11);

            $table->integer('ta_id')->length(11)->nullable();
            $table->integer('accom_cat_id')->length(11)->nullable();
            $table->integer('state_id')->length(11)->nullable();
            $table->integer('country_id')->length(11)->nullable();
            $table->integer('city_id')->length(11)->nullable();
            $table->integer('postcode')->length(20)->nullable();
            $table->tinyInteger('club')->length(1)->nullable();
            $table->string('accom_name',60)->nullable();
            $table->string('accom_code',20)->nullable();
            $table->string('accom_addr',255)->nullable();
            $table->decimal('admin_charges', 6, 2)->nullable();
            $table->integer('min_stay')->length(1)->nullable();
            $table->integer('min_lead_time')->length(4)->nullable();
            $table->tinyInteger('min_lead_time_unit')->length(1)->nullable();
            $table->integer('max_lead_time')->length(4)->nullable();
            $table->tinyInteger('max_lead_time_unit')->length(1)->nullable();
            $table->integer('cxl_deadline')->length(4)->nullable();
            $table->tinyInteger('cxl_deadline_unit')->length(1)->nullable();
            
            $table->string('accom_remarks', 1000)->nullable();
            $table->tinyInteger('is_active')->length(1)->nullable();
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        
        DB::table('accommodations')->insert(array([        
            'ta_id' => 1,
            'accom_cat_id' => 1,
            'state_id' => 1,
            'country_id' => 1,
            'club' => 0,
            'accom_name' => 'Birch The Plaza',
            'accom_code' => 'BPA',
            
            'accom_addr' => 'Unit 77-15-22-12, Penang Times Square, Jalan Dato Keramat, 10150 Georgetown, Penang',
            'admin_charges' => '0',
            'min_stay' => 2,
            'min_lead_time' => 14,
            'min_lead_time_unit' => 0,
            'max_lead_time' => 6,
            'max_lead_time_unit' => 1,
            'cxl_deadline' => 17,
            'cxl_deadline_unit' => 0,
            'accom_remarks' => '-',
            'is_active' => 1,        
        ],[
            'ta_id' => 1,
            'accom_cat_id' => 1,
            'state_id' => 1,
            'country_id' => 1,
            'club' => 1,
            'accom_name' => 'Birch The Plaza',
            'accom_code' => 'BPA',
            'accom_addr' => 'Unit 77-15-22-12, Penang Times Square, Jalan Dato Keramat, 10150 Georgetown, Penang',
            'admin_charges' => '0',
            'min_stay' => 2,
            'min_lead_time' => 14,
            'min_lead_time_unit' => 0,
            'max_lead_time' => 6,
            'max_lead_time_unit' => 1,
            'cxl_deadline' => 14,
            'cxl_deadline_unit' => 0,
            'accom_remarks' => '1. These are residential apartments. No 24 hours reception and check-in hours until 6pm daily. Check-in 6pm-10pm can be pre-arranged and late check-in charges apply (Rate w.e.f 1 Jun 2018 at 0% GST: arrival 6pm-7pm RM18.85, arrival 7:01pm-10pm RM56.60). Advance notification of arrival time required for meet up and check-in arrangement. \n2. Compulsory to bring Membership Card for registration and check-in.',
            'is_active' => 1,
        ]));

        // $accommodations[] = [
        // [        
        //     'ta_id' => 1,
        //     'accom_cat_id' => 1,
        //     'state_id' => 1,
        //     'country_id' => 1,
        //     'club' => 1,
        //     'accom_name' => 'Birch The Plaza',
        //     'accom_address' => 'Lot 123, Jalan Joo Siew, Krokop',
        //     'admin_charges' => '0',
        //     'min_stay' => 2,
        //     'check_in_time' => 1800,
        //     'chk_out_time' => 2200,
        //     'min_lead_time_unit' => 0,
        //     'max_lead_time' => 1,
        //     'max_lead_time_unit' => 0,
        //     'cxl_deadline' => 14,
        //     'cxl_deadline_unit' => 0,
        //     'accom_remarks' => '-',
        //     'is_active' => 1,        
        // ],[
        //     'ta_id' => 1,
        //     'accom_cat_id' => 1,
        //     'state_id' => 1,
        //     'country_id' => 1,
        //     'club' => 1,
        //     'accom_name' => 'Birch The Plaza',
        //     'accom_address' => 'Lot 123, Jalan Joo Siew, Krokop',
        //     'admin_charges' => '0',
        //     'min_stay' => 2,
        //     'check_in_time' => 1800,
        //     'chk_out_time' => 2200,
        //     'min_lead_time_unit' => 0,
        //     'max_lead_time' => 1,
        //     'max_lead_time_unit' => 0,
        //     'cxl_deadline' => 14,
        //     'cxl_deadline_unit' => 0,
        //     'accom_remarks' => '-',
        //     'is_active' => 1,
        //     ]
        // ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodations');
    }
}
