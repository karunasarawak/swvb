<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLhdnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhdn', function (Blueprint $table) {
            $table->id('lhdn_id');
            $table->string('jenis_penyeteman')->nullable();
            $table->string('kategori')->nullable();
            $table->string('jenis_suratcara')->nullable();
            $table->string('butiran_cara')->nullable();
            $table->string('prinsipal')->nullable();
            $table->string('huraian')->nullable();
            $table->string('duti')->nullable();
            // $table->string('penalti')->nullable();
            $table->tinyInteger('bil_asal')->nullable();
            $table->tinyInteger('bil_salinan')->nullable();
            $table->decimal('amount_salinan')->nullable();
            $table->decimal('jumlah_duti')->nullable();

            $table->string('pertama_kategori')->nullable();
            $table->string('pertama_nama')->nullable();
            $table->string('pertama_ic')->nullable();
            $table->string('pertama_warganegara')->nullable();
            $table->string('pertama_negara1')->nullable();
            $table->string('pertama_alamat1')->nullable();
            $table->string('pertama_alamat2')->nullable();
            $table->string('pertama_alamat3')->nullable();
            $table->string('pertama_negara2')->nullable();
            $table->string('pertama_cukai')->nullable();
            $table->string('pertama_negeri')->nullable();
            $table->string('pertama_poskad')->nullable();
            $table->string('pertama_bandar')->nullable();
            $table->string('pertama_tel')->nullable();
            $table->string('pertama_email')->nullable();
            $table->timestamps();
        });

        DB::table('lhdn')->insert(
            array(
                [
                    'jenis_penyeteman'=> '_007_PENYETEMAN_AM',
                    'kategori' => '_046_PenyetemanAm',
                    'jenis_suratcara' => '197 Perjanjian Biasa',
                    'butiran_cara'=> 'Membership Agreement',
                    'prinsipal' => 'P-PRINCIPAL',
                    'huraian' => 'Timeshare Membership',
                    'duti' => 10.00,
                    'bil_asal' => 1,
                    'bil_salinan' => 1,
                    'amount_salinan' => 10.00,
                    'jumlah_duti' => 20.00,

                    'pertama_kategori' => 'C-SYARIKAT',
                    'pertama_nama' => 'Sara WorldWide Vacations Berhad',
                    'pertama_ic' => '019223-V',
                    'pertama_warganegara'=> 'Y-MALAYSIA',
                    'pertama_negara1' => 'MYS-MALAYSIA',
                    'pertama_cukai' => null,
                    'pertama_alamat1' => 'Unit W22-01 & 02, Level 22 Gateway Kuching',
                    'pertama_alamat2' => 'No.9, Jalan Bukit Mata',
                    'pertama_alamat3' => null,
                    'pertama_negara2' => 'MYS_MALAYSIA',
                    'pertama_negeri' => 'Q_SARAWAK',
                    'pertama_poskad' => '93100',
                    'pertama_bandar' => '10020 KUCHING',
                    'pertama_tel' => '082238007',
                    'pertama_email' => 'info@saraworldwide.com.my'
                ]
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
        Schema::dropIfExists('lhdn');
    }
}
