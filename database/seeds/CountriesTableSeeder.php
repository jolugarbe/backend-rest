<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = '/seeds/files/countries.sql';
        DB::unprepared(File::get(database_path().$path));
        $this->command->info('countries table seeded!');
    }
}
