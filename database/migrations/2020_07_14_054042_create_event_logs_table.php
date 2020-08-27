<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_logs', function (Blueprint $table) {
            $table->id('el_id');
        
            $table->integer('mbrship_id')->length(11)->nullable();
            $table->integer('lead_id')->length(11)->nullable();
            
            $table->integer('el_cat_id')->length(11)->nullable();
            $table->string('el_title',50)->nullable();
            $table->string('el_remarks',255)->nullable();

            $table->string('el_created_by',50)->nullable();
            $table->date('el_created_at')->nullable();

            $table->string('el_updated_by',50)->nullable();
            $table->date('el_updated_at')->nullable();

            $table->integer('el_assign_type')->nullable();
            $table->string('el_assign_to',50)->nullable();
            $table->date('el_assign_at',50)->nullable();
            

            $table->date('el_to_resolve_at',50)->nullable();
            $table->date('el_resolve_at',50)->nullable();

            $table->string('reservation_type',50)->nullable();
            $table->integer('com_channel_id')->nullable();
            $table->integer('el_status')->default(0);
            
            $table->timestamps();
        });

        $current = date('Y-m-d');

        DB::table('event_logs')->insert(array(
            [
                'mbrship_id'=>1,'lead_id'=>1, 'el_type_id'=>1, 'el_cat_id'=>1, 'el_title'=>'Reminder',
                'el_remarks'=>'-','el_created_by'=>'Lee','el_updated_by'=>'Amin',
                'el_assign_type'=> 1,'el_assign_to'=>'2','el_assign_at'=>'2020-06-25',
                'el_to_resolve_at'=>'2020-07-30', 'el_resolve_at'=>null,
                'reservation_type'=>'Entitlement','com_channel_id'=>1, 'el_updated_at'=>$current,'el_created_at'=>$current
                
            ],
            [
                'mbrship_id'=>1,'lead_id'=>1, 'el_type_id'=>2, 'el_cat_id'=>2, 'el_title'=>'Reminder',
                'el_remarks'=>'-','el_created_by'=>'Lee','el_updated_by'=>'Amin',
                'el_assign_type'=> 2, 'el_assign_to'=>'1','el_assign_at'=>'2020-06-25',
                'el_to_resolve_at'=>'2020-07-30', 'el_resolve_at'=>null,
                'reservation_type'=>'Entitlement','com_channel_id'=>2, 'el_updated_at'=>$current,'el_created_at'=>$current
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
        Schema::dropIfExists('event_logs');
    }
}
