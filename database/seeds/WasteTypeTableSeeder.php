<?php

use Illuminate\Database\Seeder;

class WasteTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\WasteType::firstOrCreate([
            'name' => 'Subproductos Químicos'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Productos plásticos'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Metal'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Papel y cartón'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Maderas'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Textiles'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Goma y caucho'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Vidrio'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Cuero y pieles'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Escombros, minería'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Res. Animales y vegetales'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Productos petróleos, aceites'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Chatarra y escoria'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Varios'
        ]);

        \App\WasteType::firstOrCreate([
            'name' => 'Envases, embalajes'
        ]);

    }
}
