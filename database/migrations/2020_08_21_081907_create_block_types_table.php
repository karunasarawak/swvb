<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_types', function (Blueprint $table) {
            $table->id('block_type_id');
            $table->string('block_type_desc', 255);
            $table->timestamps();
        });

        DB::table('block_types')->insert(array(
            [
                'block_type_desc' => 'Block MEM',
                'color' => '#e6194B'
            ],
            [
                'block_type_desc' => 'Block RCI BB',
                'color' => '#808000'
            ],
            [
                'block_type_desc' => 'Block RCI DS',
                'color' => '#469990'
            ],
            [
                'block_type_desc' => 'Block II DS',
                'color' => '#000075'
            ],
            [
                'block_type_desc' => 'Blocked',
                'color' => '#f58231'
            ],
            [
                'block_type_desc' => 'BSM',
                'color' => '#ffe119'
            ],
            [
                'block_type_desc' => 'Close MR',
                'color' => '#bfef45'
            ],
            [
                'block_type_desc' => 'Lease Back',
                'color' => '#911eb4'
            ],
            [
                'block_type_desc' => 'Online Booking',
                'color' => '#aaffc3'
            ],
            [
                'block_type_desc' => 'Reserved',
                'color' => '#a9a9a9'
            ]
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_types');
    }
}
{{  }}