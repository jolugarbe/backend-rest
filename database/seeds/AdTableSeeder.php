<?php

use Illuminate\Database\Seeder;

class AdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AdType::firstOrCreate([
            'name' => 'Oferta'
        ]);

        \App\AdType::firstOrCreate([
            'name' => 'Demanda'
        ]);
    }
}
