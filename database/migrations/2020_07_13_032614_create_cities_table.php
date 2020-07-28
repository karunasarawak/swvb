<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id('city_id');
            $table->string('city_name');
            $table->integer('state_id');
            $table->timestamps();
        });

        DB::table('cities')->insert(
            array(
                //Johor
                ['city_name' => 'Bakri', 'state_id'=>1],
                ['city_name' => 'Batu Pahat', 'state_id'=>1],
                ['city_name' => 'Buloh Kasap', 'state_id'=>1],
                ['city_name' => 'Chaah', 'state_id'=>1],
                ['city_name' => 'Johor Bahru', 'state_id'=>1],
                ['city_name' => 'Kampong Dungun', 'state'=>1],
                ['city_name' => 'Kelapa Sawit', 'state'=>1],
                ['city_name' => 'Kluang', 'state'=>1],
                ['city_name' => 'Kota Tinggi', 'state'=>1],
                ['city_name' => 'Kulai', 'state'=>1],
                ['city_name' => 'Labis', 'state'=>1],
                ['city_name' => 'Mersing', 'state'=>1],
                ['city_name' => 'Muar', 'state'=>1],
                ['city_name' => 'Parit Raja', 'state'=>1],
                ['city_name' => 'Pasir Gudang Baru', 'state'=>1],
                ['city_name' => 'Pekan Nenas', 'state'=>1],
                ['city_name' => 'Pontian Kechil', 'state'=>1],
                ['city_name' => 'Segamat', 'state'=>1],
                ['city_name' => 'Sekudai', 'state'=>1],
                ['city_name' => 'Simpang Renggam', 'state'=>1],
                ['city_name' => 'Taman Senai', 'state'=>1],
                ['city_name' => 'Tangkak', 'state'=>1],
                ['city_name' => 'Ulu Tiram', 'state'=>1],
                ['city_name' => 'Yong Peng', 'state'=>1],
                
                //Kedah
                ['city_name' => 'Alor Setar', 'state'=>2],
                ['city_name' => 'Bedong', 'state'=>2],
                ['city_name' => 'Gurun', 'state'=>2],
                ['city_name' => 'Jitra', 'state'=>2],
                ['city_name' => 'Kuah', 'state'=>2],
                ['city_name' => 'Kuala Kedah', 'state'=>2],
                ['city_name' => 'Kulim', 'state'=>2],
                ['city_name' => 'Pokok Sena', 'state'=>2],
                ['city_name' => 'Sungai Petani', 'state'=>2],

                //Kelantan
                ['city_name' => 'Gua Musang', 'state'=>3],
                ['city_name' => 'Kampong Kadok', 'state'=>3],
                ['city_name' => 'Kampong Pangkal Kalong', 'state'=>3],
                ['city_name' => 'Kampung Lemal', 'state'=>3],
                ['city_name' => 'Ketereh', 'state'=>3],
                ['city_name' => 'Kota Bharu', 'state'=>3],
                ['city_name' => 'Pasir Mas', 'state'=>3],
                ['city_name' => 'Peringat', 'state'=>3],
                ['city_name' => 'Pulai Chondong', 'state'=>3],
                ['city_name' => 'Tanah Merah', 'state'=>3],
                ['city_name' => 'Tumpat', 'state'=>3],
                
                // Melaka
                ['city_name' => 'Alor Gajah', 'state'=>4],
                ['city_name' => 'Ayer Keroh', 'state'=>4],
                ['city_name' => 'Ayer Molek', 'state'=>4],
                ['city_name' => 'Batu Berendam', 'state'=>4],
                ['city_name' => 'Bemban', 'state'=>4],
                ['city_name' => 'Bukit Baru', 'state'=>4],
                ['city_name' => 'Bukit Rambai', 'state'=>4],
                ['city_name' => 'Jasin', 'state'=>4],
                ['city_name' => 'Klebang Besar', 'state'=>4],
                ['city_name' => 'Kuala Sungai Baru', 'state'=>4],
                ['city_name' => 'Masjid Tanah', 'state'=>4],
                ['city_name' => 'Melaka', 'state'=>4],
                ['city_name' => 'Pulau Sebang', 'state'=>4],
                ['city_name' => 'Sungai Udang', 'state'=>4],

                // Negeri Sembilan
                ['city_name' => 'Bahau', 'state'=>5],
                ['city_name' => 'Kuala Klawang', 'state'=>5],
                ['city_name' => 'Kuala Pilah', 'state'=>5],
                ['city_name' => 'Nilai', 'state'=>5],
                ['city_name' => 'Port Dickson', 'state'=>5],
                ['city_name' => 'Seremban', 'state'=>5],
                ['city_name' => 'Tampin', 'state'=>5],

                // Pahang
                ['city_name' => 'Bentong Town', 'state'=>6],
                ['city_name' => 'Bukit Tinggi', 'state'=>6],
                ['city_name' => 'Jerantut', 'state'=>6],
                ['city_name' => 'Kuala Lipis', 'state'=>6],
                ['city_name' => 'Kuantan', 'state'=>6],
                ['city_name' => 'Mentekab', 'state'=>6],
                ['city_name' => 'Pekan', 'state'=>6],
                ['city_name' => 'Raub', 'state'=>6],
                ['city_name' => 'Tanah Rata', 'state'=>6],
                ['city_name' => 'Temerluh', 'state'=>6],

                // Penang
                ['city_name' => 'Bayan Lepas', 'state'=>7],
                ['city_name' => 'Bukit Mertajam', 'state'=>7],
                ['city_name' => 'Butterworth', 'state'=>7],
                ['city_name' => 'George Town', 'state'=>7],
                ['city_name' => 'Juru', 'state'=>7],
                ['city_name' => 'Kepala Batas', 'state'=>7],
                ['city_name' => 'Nibong Tebal', 'state'=>7],
                ['city_name' => 'Perai', 'state'=>7],
                ['city_name' => 'Permatang Kuching', 'state'=>7],
                ['city_name' => 'Sungai Ara', 'state'=>7],
                ['city_name' => 'Tanjung Tokong', 'state'=>7],
                ['city_name' => 'Tasek Glugor', 'state'=>7],

                // Perak
                ['city_name' => 'Bagan Serai', 'state'=>8],
                ['city_name' => 'Batu Gajah', 'state'=>8],
                ['city_name' => 'Bidor', 'state'=>8],
                ['city_name' => 'Ipoh', 'state'=>8],
                ['city_name' => 'Kampar', 'state'=>8],
                ['city_name' => 'Kuala Kangsar', 'state'=>8],
                ['city_name' => 'Lumut', 'state'=>8],
                ['city_name' => 'Pantai Remis', 'state'=>8],
                ['city_name' => 'Parit Buntar', 'state'=>8],
                ['city_name' => 'Simpang Empat', 'state'=>8],
                ['city_name' => 'Sitiawan', 'state'=>8],
                ['city_name' => 'Taiping', 'state'=>8],
                ['city_name' => 'Tapah Road', 'state'=>8],
                ['city_name' => 'Teluk Intan', 'state'=>8],

                // Perlis
                ['city_name' => 'Arau', 'state'=>9],
                ['city_name' => 'Kangar', 'state'=>9],
                ['city_name' => 'Kuala Perlis', 'state'=>9],

                // Sabah
                ['city_name' => 'Bandar Labuan', 'state'=>10],
                ['city_name' => 'Beaufort', 'state'=>10],
                ['city_name' => 'Donggongon', 'state'=>10],
                ['city_name' => 'Keningau', 'state'=>10],
                ['city_name' => 'Kinarut', 'state'=>10],
                ['city_name' => 'Kota Belud', 'state'=>10],
                ['city_name' => 'Kota Kinabalu', 'state'=>10],
                ['city_name' => 'Kudat', 'state'=>10],
                ['city_name' => 'Lahad Datu', 'state'=>10],
                ['city_name' => 'Papar', 'state'=>10],
                ['city_name' => 'Putatan', 'state'=>10],
                ['city_name' => 'Ranau', 'state'=>10],
                ['city_name' => 'Sandakan', 'state'=>10],
                ['city_name' => 'Semporna', 'state'=>10],
                ['city_name' => 'Tawau', 'state'=>10],

                //Sarawak
                ['city_name' => 'Bintulu', 'state'=>11],
                ['city_name' => 'Kapit', 'state'=>11],
                ['city_name' => 'Kuching', 'state'=>11],
                ['city_name' => 'Limbang', 'state'=>11],
                ['city_name' => 'Miri', 'state'=>11],
                ['city_name' => 'Sarikei', 'state'=>11],
                ['city_name' => 'Sibu', 'state'=>11],
                ['city_name' => 'Simanggang', 'state'=>11],
                ['city_name' => 'Sri Aman', 'state'=>11],
                
                //Selangor
                ['city_name' => 'Balakong', 'state'=>12],
                ['city_name' => 'Bangi', 'state'=>12],
                ['city_name' => 'Banting', 'state'=>12],
                ['city_name' => 'Batang Berjuntai', 'state'=>12],
                ['city_name' => 'Batu Arang', 'state'=>12],
                ['city_name' => 'Beranang', 'state'=>12],
                ['city_name' => 'Cyberjaya', 'state'=>12],
                ['city_name' => 'Jenjarum', 'state'=>12],
                ['city_name' => 'Kajang', 'state'=>12],
                ['city_name' => 'Klang', 'state'=>12],
                ['city_name' => 'Kuala Selangor', 'state'=>12],
                ['city_name' => 'Kuang', 'state'=>12],
                ['city_name' => 'Kundang', 'state'=>12],
                ['city_name' => 'Petaling Jaya', 'state'=>12],
                ['city_name' => 'Puchong', 'state'=>12],
                ['city_name' => 'Rawang', 'state'=>12],
                ['city_name' => 'Sabak Bernam', 'state'=>12],
                ['city_name' => 'Selayang', 'state'=>12],
                ['city_name' => 'Semenyih', 'state'=>12],
                ['city_name' => 'Serendah', 'state'=>12],
                ['city_name' => 'Seri Kembangan', 'state'=>12],
                ['city_name' => 'Shah Alam', 'state'=>12],
                ['city_name' => 'Subang', 'state'=>12],
                ['city_name' => 'Subang Jaya', 'state'=>12],
                ['city_name' => 'Sungai Besar', 'state'=>12],
                ['city_name' => 'Sungai Pelek', 'state'=>12],
                ['city_name' => 'Tanjung Karang', 'state'=>12],
                ['city_name' => 'Tanjung Sepat', 'state'=>12],

                //Terengganu
                ['city_name' => 'Cukai', 'state'=>13],
                ['city_name' => 'Jertih', 'state'=>13],
                ['city_name' => 'Kertih', 'state'=>13],
                ['city_name' => 'Kuala Dungun', 'state'=>13],
                ['city_name' => 'Kuala Terengganu', 'state'=>13],
                ['city_name' => 'Marang', 'state'=>13],
                ['city_name' => 'Paka', 'state'=>13],
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
        Schema::dropIfExists('cities');
    }
}
