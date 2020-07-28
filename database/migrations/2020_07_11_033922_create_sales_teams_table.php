<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_teams', function (Blueprint $table) {
            $table->id('sales_team_id');
            $table->integer('sales_role_id');
            $table->string('sales_name')->nullable();
            $table->integer('sales_ma_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        DB::table('sales_teams')->insert(
            array(
                ['sales_role_id' => '1', 'sales_name'=>'Dutch', 'sales_ma_id'=>1],
                ['sales_role_id' => '1', 'sales_name'=>'Mark', 'sales_ma_id'=>2],
                ['sales_role_id' => '1', 'sales_name'=>'James', 'sales_ma_id'=>1],
                ['sales_role_id' => '2', 'sales_name'=>'Tom', 'sales_ma_id'=>2],
                ['sales_role_id' => '2', 'sales_name'=>'Kenny', 'sales_ma_id'=>1],
                ['sales_role_id' => '2', 'sales_name'=>'Victoria', 'sales_ma_id'=>2],
                ['sales_role_id' => '3', 'sales_name'=>'Sharon', 'sales_ma_id'=>1],
                ['sales_role_id' => '3', 'sales_name'=>'Benny', 'sales_ma_id'=>2],
                ['sales_role_id' => '3', 'sales_name'=>'David', 'sales_ma_id'=>1],
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
        Schema::dropIfExists('sales_teams');
    }
}
