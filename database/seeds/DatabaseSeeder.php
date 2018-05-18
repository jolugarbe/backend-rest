<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ActivitiesTableSeeder::class);
         $this->call(AdTableSeeder::class);
         $this->call(FrequencyTableSeeder::class);
         $this->call(WasteTypeTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(ProvincesTableSeeder::class);
         $this->call(LocalitiesTableSeeder::class);
    }
}
