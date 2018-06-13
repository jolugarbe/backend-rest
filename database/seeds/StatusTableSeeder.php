<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\StatusType::firstOrCreate([
            'name' => 'pending',
            'display_name' => 'Pendiente'
        ]);

        \App\StatusType::firstOrCreate([
            'name' => 'owner_rejected',
            'display_name' => 'Rechazado por propietario'
        ]);

        \App\StatusType::firstOrCreate([
            'name' => 'request_rejected',
            'display_name' => 'Cancelado por solicitante'
        ]);

        \App\StatusType::firstOrCreate([
            'name' => 'accepted',
            'display_name' => 'Aceptado'
        ]);

    }
}
