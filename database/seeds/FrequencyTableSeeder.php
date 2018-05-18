<?php

use Illuminate\Database\Seeder;

class FrequencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\FrequencyType::firstOrCreate([
            'name' => 'Semanal'
        ]);

        \App\FrequencyType::firstOrCreate([
            'name' => 'Mensual'
        ]);

        \App\FrequencyType::firstOrCreate([
            'name' => 'Anual'
        ]);

        \App\FrequencyType::firstOrCreate([
            'name' => 'Estacional'
        ]);
    }
}
