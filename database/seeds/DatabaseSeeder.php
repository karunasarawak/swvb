<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call([CountriesTableSeeder::class]);
         factory(\App\User::class, 3)->create();
    }
}
