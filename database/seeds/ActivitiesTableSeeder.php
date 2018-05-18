<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::firstOrCreate([
            'group' => 'A',
            'name' => 'Agricultura, ganadería, silvicultura y pesca'
        ]);

        Activity::firstOrCreate([
            'group' => 'B',
            'name' => 'Industrias extractivas'
        ]);

        Activity::firstOrCreate([
            'group' => 'C',
            'name' => 'Industria manufacturera'
        ]);

        Activity::firstOrCreate([
            'group' => 'D',
            'name' => 'Suministro de energía eléctrica, gas, vapor y aire acondicionado'
        ]);

        Activity::firstOrCreate([
            'group' => 'E',
            'name' => 'Suministro de agua, actividades de saneamiento, gestión de residuos y descontaminación'
        ]);

        Activity::firstOrCreate([
            'group' => 'F',
            'name' => 'Construcción'
        ]);

        Activity::firstOrCreate([
            'group' => 'G',
            'name' => 'Comercio al por mayor y al por menor; reparación de vehículos de motor y motocicletas'
        ]);

        Activity::firstOrCreate([
            'group' => 'H',
            'name' => 'Transporte y almacenamiento'
        ]);

        Activity::firstOrCreate([
            'group' => 'I',
            'name' => 'Hostelería'
        ]);

        Activity::firstOrCreate([
            'group' => 'J',
            'name' => 'Información y comunicaciones'
        ]);

        Activity::firstOrCreate([
            'group' => 'K',
            'name' => 'Actividades financieras y de seguros'
        ]);

        Activity::firstOrCreate([
            'group' => 'L',
            'name' => 'Actividades inmobiliarias'
        ]);

        Activity::firstOrCreate([
            'group' => 'M',
            'name' => 'Actividades profesionales, científicas y técnicas'
        ]);

        Activity::firstOrCreate([
            'group' => 'N',
            'name' => 'Actividades administrativas y servicios auxliares'
        ]);

        Activity::firstOrCreate([
            'group' => 'O',
            'name' => 'Administración Pública y defensa; Seguridad Social obligatoria'
        ]);

        Activity::firstOrCreate([
            'group' => 'P',
            'name' => 'Educación'
        ]);

        Activity::firstOrCreate([
            'group' => 'Q',
            'name' => 'Actividades sanitarias y de servicios sociales'
        ]);

        Activity::firstOrCreate([
            'group' => 'R',
            'name' => 'Actividades artísticas, recreativas y de entrenimiento'
        ]);

        Activity::firstOrCreate([
            'group' => 'S',
            'name' => 'Otros servicios'
        ]);

        Activity::firstOrCreate([
            'group' => 'T',
            'name' => 'Actividades de los hogares como empleadores de personal doméstico; actividades de los hogares como productores de bienes y servicios para uso propio'
        ]);

        Activity::firstOrCreate([
            'group' => 'U',
            'name' => 'Actividades de organizaciones y organismos extraterritoriales'
        ]);
    }
}
