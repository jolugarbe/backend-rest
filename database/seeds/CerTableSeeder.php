<?php

use Illuminate\Database\Seeder;

class CerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // GROUP 01

        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LA PROSPECCIÓN, EXTRACCIÓN DE MINAS Y CANTERAS Y TRATAMIENTOS FÍSICOS Y QUÍMICOS DE MINERALES',
            'code' => '01'
        ]);

        // Subgroup 0101
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la extracción de minerales',
            'code' => '0101',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la extracción de minerales metálicos',
            'code' => '010101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la extracción de minerales no metálicos',
            'code' => '010102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la transformación física y química de minerales metálicos',
            'code' => '0103',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Estériles que generan ácido procedentes de la transformación de sulfuros',
            'code' => '010304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros estériles que contienen sustancias peligrosas',
            'code' => '010305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Estériles distintos de los mencionados en los códigos 01 03 04 y 01 03 05',
            'code' => '010306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos que contienen sustancias peligrosas procedentes de la transformación física y química de minerales metálicos',
            'code' => '010307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de polvo y arenilla distintos de los mencionados en el código 01 03 07',
            'code' => '010308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos rojos de la producción de alúmina distintos de los mencionados en el código 01 03 07',
            'code' => '010309',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '010399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);


        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la transformación física y química de minerales no metálicos',
            'code' => '0104',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen sustancias peligrosas procedentes de la transformación física y química de minerales no metálicos',
            'code' => '010407',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de grava y rocas trituradas distintos de los mencionados en el código 01 04 07',
            'code' => '010408',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de arena y arcillas',
            'code' => '010409',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de polvo y arenilla distintos de los mencionados en el código 01 04 07',
            'code' => '010410',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la transformación de potasa y sal gema distintos de los mencionados en el código 01 04 07',
            'code' => '010411',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Estériles y otros residuos del lavado y limpieza de minerales, distintos de los mencionados en los códigos 01 04 07 y 01 04 11',
            'code' => '010412',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del corte y serrado de piedra distintos de los mencionados en el código 01 04 07',
            'code' => '010413',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '010499',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // -------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Lodos y otros residuos de perforaciones',
            'code' => '0105',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y residuos de perforaciones que contienen agua dulce',
            'code' => '010504',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y residuos de perforaciones que contienen hidrocarburos',
            'code' => '010505',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y otros residuos de perforaciones que contienen sustancias peligrosas',
            'code' => '010506',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y otros residuos de perforaciones que contienen sales de bario distintos de los mencionados en los códigos 01 05 05 y 01 05 06',
            'code' => '010507',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y otros residuos de perforaciones que contienen cloruros distintos de los mencionados en los códigos 01 05 05 y 01 05 06',
            'code' => '010508',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '010599',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 1 ************************

        // GROUP 02

        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LA AGRICULTURA, HORTICULTURA, ACUICULTURA, SILVICULTURA, CAZA Y PESCA; RESIDUOS DE LA PREPARACIÓN Y ELABORACIÓN DE ALIMENTOS',
            'code' => '02'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la agricultura, horticultura, acuicultura, silvicultura, caza y pesca',
            'code' => '0201',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de lavado y limpieza',
            'code' => '020101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tejidos de animales',
            'code' => '020102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tejidos de vegetales',
            'code' => '020103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de plásticos (excepto embalajes)',
            'code' => '020104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Heces de animales, orina y estiércol (incluida paja podrida) y efluentes recogidos selectivamente y tratados fuera del lugar donde se generan',
            'code' => '020106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la silvicultura',
            'code' => '020107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos agroquímicos que contienen sustancias peligrosas',
            'code' => '020108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos agroquímicos distintos de los mencionados en el código 02 01 08',
            'code' => '020109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos metálicos',
            'code' => '020110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // --------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la preparación y elaboración de carne, pescado y otros alimentos de origen animal',
            'code' => '0202',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de lavado y limpieza',
            'code' => '020201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tejidos de animales',
            'code' => '020202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales inadecuados para el consumo o la elaboración',
            'code' => '020203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '020204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // --------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la preparación y elaboración de frutas, hortalizas, cereales, aceites comestibles, cacao, café, té y tabaco; producción de conservas; producción de levadura y extracto de levadura, preparación y fermentación de melazas',
            'code' => '0203',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de lavado, limpieza, pelado, centrifugado y separación',
            'code' => '020301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de conservantes',
            'code' => '020302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la extracción con disolventes',
            'code' => '020303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales inadecuados para el consumo o la elaboración',
            'code' => '020304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '020305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la elaboración de azúcar',
            'code' => '0204',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tierra procedente de la limpieza y lavado de la remolacha',
            'code' => '020401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Carbonato cálcico fuera de especificación',
            'code' => '020402',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '020403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020499',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la industria de productos lácteos',
            'code' => '0205',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales inadecuados para el consumo o la elaboración',
            'code' => '020501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '020502',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020599',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la industria de panadería y pastelería',
            'code' => '0206',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales inadecuados para el consumo o la elaboración',
            'code' => '020601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de conservantes',
            'code' => '020602',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '020603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020699',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la producción de bebidas alcohólicas y no alcohólicas (excepto café, té y cacao)',
            'code' => '0207',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de lavado, limpieza y reducción mecánica de materias primas',
            'code' => '020701',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la destilación de alcoholes',
            'code' => '020702',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento químico',
            'code' => '020703',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales inadecuados para el consumo o la elaboración',
            'code' => '020704',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '020705',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '020799',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 2 *****************************

        // GROUP 3

        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LA TRANSFORMACIÓN DE LA MADERA Y DE LA PRODUCCIÓN DE TABLEROS Y MUEBLES, PASTA DE PAPEL, PAPEL Y CARTÓN',
            'code' => '03'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la transformación de la madera y de la producción de tableros y muebles',
            'code' => '0301',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de corteza y corcho',
            'code' => '030101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Serrín, virutas, recortes, madera, tableros de partículas y chapas que contienen sustancias peligrosas',
            'code' => '030104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Serrín, virutas, recortes, madera, tableros de partículas y chapas distintos de los mencionados en el código 03 01 04',
            'code' => '030105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '030199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ---------------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de los tratamientos de conservación de la madera',
            'code' => '0302',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Conservantes de la madera orgánicos no halogenados',
            'code' => '030201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Conservantes de la madera organoclorados',
            'code' => '030202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Conservantes de la madera organometálicos',
            'code' => '030203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Conservantes de la madera inorgánicos',
            'code' => '030204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros conservantes de la madera que contienen sustancias peligrosas',
            'code' => '030205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Conservantes de la madera no especificados en otra categoría',
            'code' => '030299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);


        //-------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la producción y transformación de pasta de papel, papel y cartón',
            'code' => '0303',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de corteza y madera',
            'code' => '030301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de lejías verdes (procedentes de la recuperación de lejías de cocción)',
            'code' => '030302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de destintado procedentes del reciclado de papel',
            'code' => '030305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Desechos, separados mecánicamente, de pasta elaborada a partir de residuos de papel y cartón',
            'code' => '030307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de la clasificación de papel y cartón destinados al reciclado',
            'code' => '030308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de lodos calizos',
            'code' => '030309',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Desechos de fibras y lodos de fibras, de materiales de carga y de estucado, obtenidos por separación mecánica',
            'code' => '030310',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 03 03 10',
            'code' => '030311',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '030399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 3 **********************


        // GROUP 4
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LAS INDUSTRIAS DEL CUERO, DE LA PIEL Y TEXTIL',
            'code' => '04'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de las industrias del cuero y de la piel',
            'code' => '0401',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Carnazas y serrajes de encalado',
            'code' => '040101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de encalado',
            'code' => '040102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de desengrasado que contienen disolventes sin fase líquida',
            'code' => '040103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos de curtición que contienen cromo',
            'code' => '040104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos de curtición que no contienen cromo',
            'code' => '040105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos, en particular los procedentes del tratamiento in situ de efluentes, que contienen cromo',
            'code' => '040106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos, en particular los procedentes del tratamiento in situ de efluentes, que no contienen cromo',
            'code' => '040107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del curtido de piel (láminas azules, virutas, recortes, polvo) que contienen cromo',
            'code' => '040108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de confección y acabado',
            'code' => '040109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '040199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la industria textil',
            'code' => '0402',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de materiales compuestos (textiles impregnados, elastómeros, plastómeros)',
            'code' => '040209',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materia orgánica de productos naturales (por ejemplo grasa, cera)',
            'code' => '040210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del acabado que contienen disolventes orgánicos',
            'code' => '040214',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del acabado distintos de los especificados en el código 04 02 14',
            'code' => '040215',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Colorantes y pigmentos que contienen sustancias peligrosas',
            'code' => '040216',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Colorantes y pigmentos distintos de los mencionados en el código 04 02 16',
            'code' => '040217',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '040219',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los mencionados en el código 04 02 19',
            'code' => '040220',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de fibras textiles no procesadas',
            'code' => '040221',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de fibras textiles procesadas',
            'code' => '040222',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '040299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 4 *****************

        // GROUP 5
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DEL REFINO DE PETRÓLEO, PURIFICACIÓN DEL GAS NATURAL Y TRATAMIENTO PIROLÍTICO DEL CARBÓN',
            'code' => '05'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del refino de petróleo',
            'code' => '0501',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de desalación',
            'code' => '050102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de fondos de tanques',
            'code' => '050103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de alquil ácido',
            'code' => '050104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Derrames de hidrocarburos',
            'code' => '050105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos oleosos procedentes de operaciones de mantenimiento de plantas o equipos',
            'code' => '050106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Alquitranes ácidos',
            'code' => '050107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros alquitranes',
            'code' => '050108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '050109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los mencionados en el código 05 01 09',
            'code' => '050110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de la limpieza de combustibles con bases',
            'code' => '050111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hidrocarburos que contienen ácidos',
            'code' => '050112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos procedentes del agua de alimentación de calderas',
            'code' => '050113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de columnas de refrigeración',
            'code' => '050114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Arcillas de filtración usadas',
            'code' => '050115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen azufre procedentes de la desulfuración del petróleo',
            'code' => '050116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Betunes',
            'code' => '050117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '050199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del tratamiento pirolítico del carbón',
            'code' => '0506',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Alquitranes ácidos',
            'code' => '050601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros alquitranes',
            'code' => '050603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de columnas de refrigeración',
            'code' => '050604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '050699',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la purificación y transporte de gas natural',
            'code' => '0507',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen mercurio',
            'code' => '050701',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen azufre',
            'code' => '050702',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '050799',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 5 *****************

        // GROUP 6
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE PROCESOS QUÍMICOS INORGÁNICOS',
            'code' => '06'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de ácidos',
            'code' => '0601',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácido sulfúrico y ácido sulfuroso',
            'code' => '060101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácido clorhídrico',
            'code' => '060102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácido fluorhídrico',
            'code' => '060103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácido fosfórico y ácido fosforoso',
            'code' => '060104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácido nítrico y ácido nitroso',
            'code' => '060105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros ácidos',
            'code' => '060106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        //--------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de bases',
            'code' => '0602',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hidróxido cálcico',
            'code' => '060201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hidróxido amónico',
            'code' => '060203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hidróxido potásico e hidróxido sódico',
            'code' => '060204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras bases',
            'code' => '060205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de sales y sus soluciones y de óxidos metálicos',
            'code' => '0603',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Sales sólidas y soluciones que contienen cianuros',
            'code' => '060311',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Sales sólidas y soluciones que contienen metales pesados',
            'code' => '060313',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Sales sólidas y soluciones distintas de las mencionadas en los códigos 06 03 11 y 06 03 13',
            'code' => '060314',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Óxidos metálicos que contienen metales pesados',
            'code' => '060315',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Óxidos metálicos distintos de los mencionados en el código 06 03 15',
            'code' => '060316',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos que contienen metales distintos de los mencionados en el código 06 03',
            'code' => '0604',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen arsénico',
            'code' => '060403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen mercurio',
            'code' => '060404',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen otros metales pesados',
            'code' => '060405',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060499',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '0605',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '060502',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los mencionados en el código 06 05 02',
            'code' => '060503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ---------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos químicos que contienen azufre, de procesos químicos del azufre y de procesos de desulfuración',
            'code' => '0606',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen sulfuros peligrosos',
            'code' => '060602',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen sulfuros distintos de los mencionados en el código 06 06 02',
            'code' => '060603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060699',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de halógenos y de procesos químicos de los halógenos',
            'code' => '0607',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de electrólisis que contienen amianto',
            'code' => '060701',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Carbón activo procedente de la producción de cloro',
            'code' => '060702',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de sulfato bárico que contienen mercurio',
            'code' => '060703',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones y ácidos, por ejemplo, ácido de contacto',
            'code' => '060704',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060799',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU del silicio y sus derivados',
            'code' => '0608',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen clorosilanos peligrosos',
            'code' => '060802',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060899',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos químicos que contienen fósforo y procesos químicos del fósforo',
            'code' => '0609',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de fósforo',
            'code' => '060902',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cálcicos de reacción que contienen o están contaminados con sustancias peligrosas',
            'code' => '060903',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cálcicos de reacción distintos de los mencionados en el código 06 09 03',
            'code' => '060904',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '060999',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos químicos que contienen nitrógeno y procesos químicos del nitrógeno y de la fabricación de fertilizantes',
            'code' => '0610',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen sustancias peligrosas',
            'code' => '061002',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '061099',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la fabricación de pigmentos inorgánicos y o pacificantes',
            'code' => '0611',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cálcicos de reacción procedentes de la producción de dióxido de titanio',
            'code' => '061101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '061199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de procesos químicos inorgánicos no especificados en otra categoría',
            'code' => '0613',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos fitosanitarios inorgánicos, conservantes de la madera y otros biocidas',
            'code' => '061301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Carbón activo usado (excepto la categoría 06 07 02)',
            'code' => '061302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Negro de carbón',
            'code' => '061303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de la transformación del amianto',
            'code' => '061304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hollín',
            'code' => '061305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '061399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 6 *****************

        // GROUP 7
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE PROCESOS QUÍMICOS ORGÁNICOS',
            'code' => '07'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos químicos orgánicos de base',
            'code' => '0701',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 01 11',
            'code' => '070112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de plásticos, caucho sintético y fibras artificiales',
            'code' => '0702',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070209',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070211',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 02 11',
            'code' => '070212',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de plástico',
            'code' => '070213',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de aditivos que contienen sustancias peligrosas',
            'code' => '070214',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de aditivos distintos de los especificados en el código 07 02 14',
            'code' => '070215',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen siliconas peligrosas',
            'code' => '070216',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen siliconas distintas de las mencionadas en la partida 070216',
            'code' => '070217',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de tintes y pigmentos orgánicos (excepto los del subcapítulo 06 11)',
            'code' => '0703',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070309',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070310',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070311',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 03 11',
            'code' => '070312',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos fitosanitarios orgánicos (excepto los de los códigos 02 01 08 y 02 01 09), de conservantes de la madera (excepto los del subcapítulo 03 02) y de otros biocidas',
            'code' => '0704',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070404',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070407',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070408',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070409',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070410',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070411',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 04 11',
            'code' => '070412',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos que contienen sustancias peligrosas',
            'code' => '070413',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070499',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos farmacéuticos',
            'code' => '0705',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070504',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070507',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070508',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070509',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070510',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070511',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 05 11',
            'code' => '070512',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos que contienen sustancias peligrosas',
            'code' => '070513',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos distintos de los especificados en el código 07 05 13',
            'code' => '070514',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070599',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de grasas, jabones, detergentes, desinfectantes y cosméticos',
            'code' => '0706',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070607',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070608',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070609',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070610',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070611',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 06 11',
            'code' => '070612',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070699',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de productos químicos resultantes de la química fina y productos químicos no especificados en otra categoría',
            'code' => '0707',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de limpieza y licores madre acuosos',
            'code' => '070701',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Disolventes, líquidos de limpieza y licores madre organohalogenados',
            'code' => '070703',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes, líquidos de limpieza y licores madre orgánicos',
            'code' => '070704',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de reacción y de destilación halogenados',
            'code' => '070707',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de reacción y de destilación',
            'code' => '070708',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tortas de filtración y absorbentes usados halogenados',
            'code' => '070709',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras tortas de filtración y absorbentes usados',
            'code' => '070710',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '070711',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 07 07 11',
            'code' => '070712',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '070799',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 7 *****************

        // GROUP 8
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LA FABRICACIÓN, FORMULACIÓN, DISTRIBUCIÓN Y UTILIZACIÓN (FFDU) DE REVESTIMIENTOS (PINTURAS, BARNICES Y ESMALTES VITREOS), ADHESIVOS, SELLANTES Y TINTAS DE IMPRESIÓN',
            'code' => '08'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU y del decapado o eliminación de pintura y barniz',
            'code' => '0801',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de pintura y barniz que contienen disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de pintura y barniz, distintos de los especificados en el código 08 01 11',
            'code' => '080112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de pintura y barniz que contienen disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de pintura y barniz, distintos de los especificados en el código 08 01 13',
            'code' => '080114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen pintura o barniz con disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen pintura o barniz, distintos de los especificados en el código 08 01 15',
            'code' => '080116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del decapado o eliminación de pintura y barniz que contienen disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del decapado o eliminación de pintura y barniz, distintos de los especificados en el código 08 01 17',
            'code' => '080118',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Suspensiones acuosas que contienen pintura o barniz con disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Suspensiones acuosas que contienen pintura o barniz, distintos de los especificados en el código 08 01 19',
            'code' => '080120',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de decapantes o desbarnizadores',
            'code' => '080121',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '080199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de otros revestimientos (incluidos materiales cerámicos)',
            'code' => '0802',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de arenillas de revestimiento',
            'code' => '080201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen materiales cerámicos',
            'code' => '080202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Suspensiones acuosas que contienen materiales cerámicos',
            'code' => '080203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '080299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        //-----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de tintas de impresión',
            'code' => '0803',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen tinta',
            'code' => '080307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos que contienen tinta',
            'code' => '080308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tintas que contienen sustancias peligrosas',
            'code' => '080312',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tintas distintos de los especificados en el código 08 03 12',
            'code' => '080313',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de tinta que contienen sustancias peligrosas',
            'code' => '080314',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de tinta distintos de los especificados en el código 08 03 14',
            'code' => '080315',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de soluciones corrosivas',
            'code' => '080316',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tóner de impresión que contienen sustancias peligrosas',
            'code' => '080317',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de tóner de impresión, distintos de los especificados en el código 08 03 17',
            'code' => '080318',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites de dispersión',
            'code' => '080319',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '080399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la FFDU de adhesivos y sellantes (incluyendo productos de impermeabilización)',
            'code' => '0804',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de adhesivos y sellantes que contienen disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080409',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de adhesivos y sellantes, distintos de los especificados en el código 08 04 09',
            'code' => '080410',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de adhesivos y sellantes que contienen disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080411',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de adhesivos y sellantes, distintos de los especificados en el código 08 04 11',
            'code' => '080412',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen adhesivos o sellantes con disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080413',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen adhesivos o sellantes, distintos de los especificados en el código 08 04 13',
            'code' => '080414',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos que contienen adhesivos o sellantes con disolventes orgánicos u otras sustancias peligrosas',
            'code' => '080415',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos que contienen adhesivos o sellantes, distintos de los especificados en el código 08 04 15',
            'code' => '080416',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceite de resina',
            'code' => '080417',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '080499',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos no especificados de otra forma en el capítulo 08',
            'code' => '0805',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Isocianatos residuales',
            'code' => '080501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 8 *****************


        // GROUP 9
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LA INDUSTRIA FOTOGRAFICA',
            'code' => '09'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la industria fotográfica',
            'code' => '0901',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones de revelado y soluciones activadoras al agua',
            'code' => '090101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones de revelado de placas de impresión al agua',
            'code' => '090102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones de revelado con disolventes',
            'code' => '090103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones de fijado',
            'code' => '090104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones de blanqueo y soluciones de blanqueo-fijado',
            'code' => '090105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen plata procedente del tratamiento in situ de residuos fotográficos',
            'code' => '090106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Películas y papel fotográfico que contienen plata o compuestos de plata',
            'code' => '090107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Películas y papel fotográfico que no contienen plata ni compuestos de plata',
            'code' => '090108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cámaras de un solo uso sin pilas ni acumuladores',
            'code' => '090110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cámaras de un solo uso con pilas o acumuladores incluidos en los códigos 16 06 01, 16 06 02 o 16 06 03',
            'code' => '090111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cámaras de un solo uso con pilas o acumuladores distintas de las especificadas en el código 09 01 11',
            'code' => '090112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos procedentes de la recuperación in situ de plata distintos de los especificados en el código 09 01 06',
            'code' => '090113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '090199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);


        // END GROUP 9 *****************

        // GROUP 10
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE PROCESOS TÉRMICOS',
            'code' => '10'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de centrales eléctricas y otras plantas de combustión (excepto los del capítulo 19)',
            'code' => '1001',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas del hogar, escorias y polvo de caldera (excepto el polvo de caldera especifiicado en el código 10 01 04)',
            'code' => '100101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes de carbón',
            'code' => '100102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes de turba y de madera (no tratada)',
            'code' => '100103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes y polvo de caldera de hidrocarburos',
            'code' => '100104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cálcicos de reacción, en forma sólida, procedentes de la desulfuración de gases de combustión',
            'code' => '100105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cálcicos de reacción, en forma de lodos, procedentes de la desulfuración de gases de combustión',
            'code' => '100107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Acido sulfúrico',
            'code' => '100109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes de hidrocarburos emulsionados usados como combustibles',
            'code' => '100113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas del hogar, escorias y polvo de caldera procedentes de la coincineración que contienen sustancias peligrosas',
            'code' => '100114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas del hogar, escorias y polvo de caldera procedentes de la coincineración, distintos de los especificados en el código 10 01 14',
            'code' => '100115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes procedentes de la coincineración que contienen sustancias peligrosas',
            'code' => '100116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes procedentes de la coincineración distintas de las especificadas en el código 10 01 16',
            'code' => '100117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de la depuración de gases que contienen sustancias peligrosas ',
            'code' => '100118',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de la depuración de gases distintos de los especificados en los códigos 10 01 05, 10 01 07 y 10 01 18',
            'code' => '100119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '100120',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 10 01 20',
            'code' => '100121',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos que contienen sustancias peligrosas procedentes de la limpieza de calderas',
            'code' => '100122',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos acuosos procedentes de la limpieza de calderas, distintos de los especificados en el código 10 01 22',
            'code' => '100123',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Arenas de lechos fluidizados',
            'code' => '100124',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes del almacenamiento y preparación de combustible de centrales termoeléctricas de carbón',
            'code' => '100125',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración',
            'code' => '100126',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la industria del hierro y del acero',
            'code' => '1002',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento de escorias',
            'code' => '100201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias no tratadas',
            'code' => '100202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '100207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases, distintos de los especificados en el código 10 02 07',
            'code' => '100208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cascarilla de laminación',
            'code' => '100210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100211',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración, distintos de los especificados en el código 10 02 11',
            'code' => '100212',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '100213',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases, distintos de los especificados en el código 10 02 13',
            'code' => '100214',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros lodos y tortas de filtración',
            'code' => '100215',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la termometalurgia del aluminio',
            'code' => '1003',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fragmentos de ánodos',
            'code' => '100302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de la producción primaria',
            'code' => '100304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de alúmina',
            'code' => '100305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias salinas de la producción secundaria',
            'code' => '100308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas negras de la producción secundaria',
            'code' => '100309',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Espumas inflamables o que emiten, en contacto con el agua, gases inflamables en cantidades peligrosas',
            'code' => '100315',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Espumas distintas de las especificadas en el código 10 03 15',
            'code' => '100316',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen alquitrán procedentes de la fabricación de ánodos',
            'code' => '100317',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen carbono procedentes de la fabricación de ánodos, distintos de los especificados en el código 10 03 17',
            'code' => '100318',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas, procedentes de los efluentes gaseosos, que contienen sustancias peligrosas',
            'code' => '100319',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas, procedentes de los efluentes gaseosos, distintas de las especificadas en el código 10 03 19',
            'code' => '100320',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas y polvo (incluido el polvo de molienda) que contienen sustancias peligrosas',
            'code' => '100321',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas y polvo (incluido el polvo de molienda) distintos de los especificados en el código 10 03 21',
            'code' => '100322',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '100323',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases, distintos de los especificados en el código 10 03 23',
            'code' => '100324',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '100325',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases, distintos de los especificados en el código 10 03 25',
            'code' => '100326',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100327',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración, distintos de los especificados en el código 10 03 27',
            'code' => '100328',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento de escorias salinas y granzas negras, que contienen sustancias peligrosas ',
            'code' => '100329',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento de escorias salinas y granzas negras distintos de los especificados en el código 10 03 29',
            'code' => '100330',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la termometalurgia del plomo',
            'code' => '1004',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de la producción primaria y secundaria',
            'code' => '100401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas de la producción primaria y secundaria',
            'code' => '100402',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Arseniato de calcio',
            'code' => '100403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas procedentes de los efluentes gaseosos',
            'code' => '100404',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas y polvos',
            'code' => '100405',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases',
            'code' => '100406',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases',
            'code' => '100407',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100409',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración distintos de los especificados en el código 10 04 09',
            'code' => '100410',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100499',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la termometalurgia del zinc',
            'code' => '1005',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de la producción primaria y secundaria',
            'code' => '100501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas procedentes de los efluentes gaseosos',
            'code' => '100503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas y polvos',
            'code' => '100504',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases',
            'code' => '100505',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases',
            'code' => '100506',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100508',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración distintos de los especificados en el código 10 05 08',
            'code' => '100509',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas inflamables o que emiten, en contacto con el agua, gases inflamables en cantidades peligrosas',
            'code' => '100510',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas distintas de las especificadas en el código 10 05 10',
            'code' => '100511',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100599',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la termometalurgia del cobre',
            'code' => '1006',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de la producción primaria y secundaria',
            'code' => '100601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas de la producción primaria y secundaria',
            'code' => '100602',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas procedentes de los efluentes gaseosos',
            'code' => '100603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas y polvos',
            'code' => '100604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases',
            'code' => '100606',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases',
            'code' => '100607',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100609',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración, distintos de los especificados en el código 10 06 09',
            'code' => '100610',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100699',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la termometalurgia de la plata, oro y platino',
            'code' => '1007',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de la producción primaria y secundaria',
            'code' => '100701',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas de la producción primaria y secundaria',
            'code' => '100702',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases',
            'code' => '100703',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas y polvos',
            'code' => '100704',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases',
            'code' => '100705',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100707',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración distintos de los especificados en el código 10 07 07',
            'code' => '100708',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100799',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // --------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la termometalurgia de otros metales no férreos',
            'code' => '1008',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas y polvo',
            'code' => '100804',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias salinas de la producción primaria y secundaria',
            'code' => '100808',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras escorias',
            'code' => '100809',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas inflamables o que emiten, en contacto con el agua, gases inflamables en cantidades peligrosas',
            'code' => '100810',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Granzas y espumas distintas de las especificadas en el código 10 08 10',
            'code' => '100811',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen alquitrán procedentes de la fabricación de ánodos',
            'code' => '100812',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen carbono procedentes de la fabricación de ánodos distintos de los especificados en el código 10 08 12',
            'code' => '100813',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fragmentos de ánodos',
            'code' => '100814',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas, procedentes de los efluentes gaseosos, que contienen sustancias peligrosas',
            'code' => '100815',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas procedentes de los efluentes gaseosos distintas de las especificadas en el código 10 08 15',
            'code' => '100816',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '100817',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases, distintos de los especificados en el código 10 08 17',
            'code' => '100818',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración que contienen aceites',
            'code' => '100819',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del tratamiento del agua de refrigeración distintos de los especificados en el código 10 08 19',
            'code' => '100820',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100899',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la fundición de piezas férreas',
            'code' => '1009',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de horno',
            'code' => '100903',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición sin colada que contienen sustancias peligrosas',
            'code' => '100905',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición sin colada distintos de los especificados en el código 10 09 05',
            'code' => '100906',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición con colada que contienen sustancias peligrosas',
            'code' => '100907',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición con colada distintos de los especificados en el código 10 09 07',
            'code' => '100908',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas, procedentes de los efluentes gaseosos, que contienen sustancias peligrosas',
            'code' => '100909',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas procedentes de los efluentes gaseosos distintas de las especificadas en el código 10 09 09',
            'code' => '100910',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas que contienen sustancias peligrosas',
            'code' => '100911',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas distintas de las especificadas en el código 10 09 11',
            'code' => '100912',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ligantes residuales que contienen sustancias peligrosas',
            'code' => '100913',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ligantes residuales distintos de los especificados en el código 10 09 13',
            'code' => '100914',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de agentes indicadores de fisuración que contienen sustancias peligrosas',
            'code' => '100915',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de agentes indicadores de fisuración distintos de los especificados en el código 10 09 15',
            'code' => '100916',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '100999',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la fundición de piezas no férreas',
            'code' => '1010',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Escorias de horno',
            'code' => '101003',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición sin colada que contienen sustancias peligrosas',
            'code' => '101005',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición sin colada distintos de los especificados en el código 10 10 05',
            'code' => '101006',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición con colada que contienen sustancias peligrosas',
            'code' => '101007',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Machos y moldes de fundición con colada distintos de los especificados en el código 10 10 07',
            'code' => '101008',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas, procedentes de los efluentes gaseosos, que contienen sustancias peligrosas',
            'code' => '101009',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas procedentes de los efluentes gaseosos, distintas de las especificadas en el código 10 10 09',
            'code' => '101010',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas que contienen sustancias peligrosas',
            'code' => '101011',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras partículas distintas de las especificadas en el código 10 10 11',
            'code' => '101012',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ligantes residuales que contienen sustancias peligrosas',
            'code' => '101013',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ligantes residuales distintos de los especificados en el código 10 10 13',
            'code' => '101014',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de agentes indicadores de fisuración que contienen sustancias peligrosas',
            'code' => '101015',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de agentes indicadores de fisuración distintos de los especificados en el código 10 10 15',
            'code' => '101016',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '101099',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la fabricación del vidrio y sus derivados',
            'code' => '1011',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de materiales de fibra de vidrio',
            'code' => '101103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas y polvo',
            'code' => '101105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la preparación de mezclas antes del proceso de cocción que contienen sustancias peligrosas',
            'code' => '101109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la preparación de mezclas antes del proceso de cocción distintos de los especificados en el código 10 11 09',
            'code' => '101110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de pequeñas partículas de vidrio y de polvo de vidrio que contienen metales pesados (por ejemplo, de tubos catódicos)',
            'code' => '101111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de vidrio distintos de los especificados en el código 10 11 11',
            'code' => '101112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos procedentes del pulido y esmerilado del vidrio que contienen sustancias peligrosas',
            'code' => '101113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos procedentes del pulido y esmerilado del vidrio, distintos de los especificados en el código 10 11 13',
            'code' => '101114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases de combustión que contienen sustancias peligrosas',
            'code' => '101115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases de combustión, distintos de los especificados en el código 10 11 15',
            'code' => '101116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '101117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases, distintos de los especificados en el código 10 11 17',
            'code' => '101118',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '101119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento in situ de efluentes, distintos de los especificados en el código 10 11 19',
            'code' => '101120',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '101199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la fabricación de productos cerámicos, ladrillos, tejas y materiales de construcción',
            'code' => '1012',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la preparación de mezclas antes del proceso de cocción',
            'code' => '101201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas y polvo',
            'code' => '101203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases',
            'code' => '101205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Moldes desechados',
            'code' => '101206',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de cerámica, ladrillos, tejas y materiales de construcción (después del proceso de cocción)',
            'code' => '101208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '101209',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases, distintos de los especificados en el código 10 12 09',
            'code' => '101210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de vidriado que contienen metales pesados',
            'code' => '101211',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de vidriado distintos de los especificados en el código 10 12 11',
            'code' => '101212',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes',
            'code' => '101213',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '101299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la fabricación de cemento, cal y yeso y de productos derivados',
            'code' => '1013',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la preparación de mezclas antes del proceso de cocción',
            'code' => '101301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de calcinación e hidratación de la cal',
            'code' => '101304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Partículas y polvo (excepto los códigos 10 13 12 y 10 13 13)',
            'code' => '101306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración del tratamiento de gases',
            'code' => '101307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la fabricación de fibrocemento que contienen amianto',
            'code' => '101309',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la fabricación de fibrocemento distintos de los especificados en el código 10 13 09',
            'code' => '101310',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de materiales compuestos a base de cemento distintos de los especificados en los códigos 10 13 09 y 10 13 10',
            'code' => '101311',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases que contienen sustancias peligrosas',
            'code' => '101312',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases, distintos de los especificados en el código 10 13 12',
            'code' => '101313',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de hormigón y lodos de hormigón',
            'code' => '101314',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '101399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de crematorios',
            'code' => '1014',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la depuración de gases que contienen mercurio',
            'code' => '101401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 10 ********************

        // GROUP 11
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DEL TRATAMIENTO QUÍMICO DE SUPERFICIE Y DEL RECUBRIMIENTO DE METALES Y OTROS MATERIALES; RESIDUOS DE LA HIDROMETALURGIA NO FÉRREA',
            'code' => '11'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del tratamiento químico de superficie y del recubrimiento de metales y otros materiales',
            'code' => '1101',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácidos de decapado',
            'code' => '110105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ácidos no especificados en otra categoría',
            'code' => '110106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Bases de decapado',
            'code' => '110107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de fosfatación',
            'code' => '110108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración que contienen sustancias peligrosas',
            'code' => '110109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos y tortas de filtración distintos de los especificados en el código 11 01 09',
            'code' => '110110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos acuosos de enjuague que contienen sustancias peligrosas',
            'code' => '110111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos acuosos de enjuague distintos de los especificados en el código 11 01 11',
            'code' => '110112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de desengrasado que contienen sustancias peligrosas',
            'code' => '110113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de desengrasado distintos de los especificados en el código 11 01 13',
            'code' => '110114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Eluatos y lodos procedentes de sistemas de membranas o de intercambio iónico que contienen sustancias peligrosas',
            'code' => '110115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Resinas intercambiadoras de iones saturadas o usadas',
            'code' => '110116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos que contienen sustancias peligrosas',
            'code' => '110198',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '110199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de procesos hidrometalúrgicos no férreos',
            'code' => '1102',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de la hidrometalurgia del zinc (incluidas jarosita y goethita)',
            'code' => '110202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la producción de ánodos para procesos de electrólisis acuosa',
            'code' => '110203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de procesos de la hidrometalurgia del cobre que contienen sustancias peligrosas',
            'code' => '110205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de procesos de la hidrometalurgia del cobre distintos de los especificados en el código 11 02 05',
            'code' => '110206',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos que contienen sustancias peligrosas',
            'code' => '110207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '110299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Lodos y sólidos de procesos de temple',
            'code' => '1103',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen cianuro',
            'code' => '110301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos',
            'code' => '110302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de procesos de galvanización en caliente',
            'code' => '1105',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Matas de galvanización',
            'code' => '110501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas de zinc',
            'code' => '110502',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases',
            'code' => '110503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fundentes usados',
            'code' => '110504',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '110599',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 11 ********************

        // GROUP 12
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DEL MOLDEADO Y DEL TRATAMIENTO FÍSICO Y MECÁNICO DE SUPERFICIE DE METALES Y PLÁSTICOS',
            'code' => '12'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del moldeado y tratamiento físico y mecánico de superficie de metales y plástico',
            'code' => '1201',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Limaduras y virutas de metales férreos',
            'code' => '120101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Polvo y partículas de metales férreos',
            'code' => '120102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Limaduras y virutas de metales no férreos',
            'code' => '120103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Polvo y partículas de metales no férreos',
            'code' => '120104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Virutas y rebabas de plástico',
            'code' => '120105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites minerales de mecanizado que contienen halógenos (excepto las emulsiones o disoluciones)',
            'code' => '120106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites minerales de mecanizado sin halógenos (excepto las emulsiones o disoluciones)',
            'code' => '120107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Emulsiones y disoluciones de mecanizado que contienen halógenos',
            'code' => '120108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Emulsiones y disoluciones de mecanizado sin halógenos',
            'code' => '120109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites sintéticos de mecanizado',
            'code' => '120110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ceras y grasas usadas',
            'code' => '120112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de soldadura',
            'code' => '120113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de mecanizado que contienen sustancias peligrosas',
            'code' => '120114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de mecanizado distintos de los especificados en el código 12 01 14',
            'code' => '120115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de granallado o chorreado que contienen sustancias peligrosas',
            'code' => '120116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de granallado o chorreado distintos de los especificados en el código 12 01 16',
            'code' => '120117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos metálicos (lodos de esmerilado, rectificado y lapeado) que contienen aceites',
            'code' => '120118',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites de mecanizado fácilmente biodegradables',
            'code' => '120119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Muelas y materiales de esmerilado usados que contienen sustancias peligrosas',
            'code' => '120120',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Muelas y materiales de esmerilado usados distintos de los especificados en el código 12 01 20',
            'code' => '120121',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '120199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de los procesos de desengrase con agua y vapor (excepto el capítulo 11)',
            'code' => '1203',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos acuosos de limpieza',
            'code' => '120301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de desengrase al vapor',
            'code' => '120302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 12 ********************

        // GROUP 13
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE ACEITES Y DE COMBUSTIBLES LÍQUIDOS (excepto los aceites comestibles y los de los capítulos 05, 12 y 19)',
            'code' => '13'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de aceites hidráulicos',
            'code' => '1301',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites hidráulicos que contienen PCB (1)',
            'code' => '130101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Emulsiones cloradas',
            'code' => '130104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Emulsiones no cloradas',
            'code' => '130105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites hidráulicos minerales clorados',
            'code' => '130109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites hidráulicos minerales no clorados',
            'code' => '130110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites hidráulicos sintéticos',
            'code' => '130111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites hidráulicos fácilmente biodegradables',
            'code' => '130112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros aceites hidráulicos',
            'code' => '130113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de aceites de motor, de transmisión mecánica y lubricantes',
            'code' => '1302',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites minerales clorados de motor, de transmisión mecánica y lubricantes',
            'code' => '130204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites minerales no clorados de motor, de transmisión mecánica y lubricantes',
            'code' => '130205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites sintéticos de motor, de transmisión mecánica y lubricantes',
            'code' => '130206',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites fácilmente biodegradables de motor, de transmisión mecánica y lubricantes',
            'code' => '130207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros aceites de motor, de transmisión mecánica y lubricantes',
            'code' => '130208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ------------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de aceites de aislamiento y transmisión de calor',
            'code' => '1303',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites de aislamiento y transmisión de calor que contienen PCB',
            'code' => '130301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites minerales clorados de aislamiento y transmisión de calor, distintos de los especificados en el código 13 03 01',
            'code' => '130306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites minerales no clorados de aislamiento y transmisión de calor',
            'code' => '130307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites sintéticos de aislamiento y transmisión de calor',
            'code' => '130308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites fácilmente biodegradables de aislamiento y transmisión de calor',
            'code' => '130309',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros aceites de aislamiento y transmisión de calor',
            'code' => '130310',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // --------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Aceites de sentinas',
            'code' => '1304',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites de sentinas procedentes de la navegación en aguas continentales',
            'code' => '130401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites de sentinas recogidos en muelles',
            'code' => '130402',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites de sentinas procedentes de otros tipos de navegación',
            'code' => '130403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Restos de separadores de agua/sustancias aceitosas',
            'code' => '1305',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Sólidos procedentes de desarenadores y de separadores de agua/sustancias aceitosas',
            'code' => '130501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de separadores de agua/sustancias aceitosas',
            'code' => '130502',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de interceptores',
            'code' => '130503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites procedentes de separadores de agua/sustancias aceitosas',
            'code' => '130506',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Agua aceitosa procedente de separadores de agua/sustancias aceitosas',
            'code' => '130507',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezcla de residuos procedentes de desarenadores y de separadores de agua/sustancias aceitosas',
            'code' => '130508',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de combustibles líquidos',
            'code' => '1307',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fuel oil y gasóleo',
            'code' => '130701',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Gasolina',
            'code' => '130702',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros combustibles (incluidas mezclas)',
            'code' => '130703',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de aceites no especificados en otra categoría',
            'code' => '1308',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos o emulsiones de desalación',
            'code' => '130801',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras emulsiones',
            'code' => '130802',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '130899',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 13 ********************

        // GROUP 14
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE DISOLVENTES, REFRIGERANTES Y PROPELENTES ORGANICOS (excepto los de los capítulos 07 y 08)',
            'code' => '14'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de disolventes, refrigerantes y propelentes de espuma y aerosoles orgánicos',
            'code' => '1406',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Clorofluorocarburos, HCFC, HFC',
            'code' => '140601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes y mezclas de disolventes halogenados',
            'code' => '140602',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros disolventes y mezclas de disolventes',
            'code' => '140603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos o residuos sólidos que contienen disolventes halogenados',
            'code' => '140604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos o residuos sólidos que contienen otros disolventes',
            'code' => '140605',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 14 ********************

        // GROUP 15
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE ENVASES; ABSORBENTES, TRAPOS DE LIMPIEZA; MATERIALES DE FILTRACION Y ROPAS DE PROTECCIÓN NO ESPECIFICADOS EN OTRA CATEGORÍA',
            'code' => '15'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Envases (incluidos los residuos de envases de la recogida selectiva municipal)',
            'code' => '1501',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases de papel y cartón',
            'code' => '150101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases de plástico',
            'code' => '150102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases de madera',
            'code' => '150103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases metálicos',
            'code' => '150104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases compuestos',
            'code' => '150105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases mixtos',
            'code' => '150106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases de vidrio',
            'code' => '150107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases textiles',
            'code' => '150109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases que contienen restos de sustancias peligrosas o están contaminados por ellas',
            'code' => '150110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Envases metálicos, incluidos los recipientes a presión vacíos, que contienen una matriz sólida y porosa peligrosa',
            'code' => '150111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Absorbentes, materiales de filtración, trapos de limpieza y ropas protectoras',
            'code' => '1502',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Absorbentes, materiales de filtración (incluidos los filtros de aceite no especificados en otra categoría), trapos de limpieza y ropas protectoras contaminados por sustancias peligrosas',
            'code' => '150202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Absorbentes, materiales de filtración, trapos de limpieza y ropas protectoras distintos de los especificados en el código 15 02 02',
            'code' => '150203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 15 ********************

        // GROUP 16
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS NO ESPECIFICADOS EN OTRO CAPÍTULO DE LA LISTA',
            'code' => '16'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Vehículos de diferentes medios de transporte al final de su vida útil y residuos del desguace de vehículos al final de su vida útil y del mantenimiento de vehículos (excepto los capítulos 13 y 147 y los subcapítulos 1606 y 1608)',
            'code' => '1601',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Neumáticos fuera de uso',
            'code' => '160103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vehículos al final de su vida útil',
            'code' => '160104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vehículos al final de su vida útil que no contengan líquidos ni otros componentes peligrosos',
            'code' => '160106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Filtros de aceite',
            'code' => '160107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes que contienen mercurio',
            'code' => '160108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes que contienen PCB',
            'code' => '160109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes explosivos (por ejemplo, air bags)',
            'code' => '160110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Zapatas de freno que contienen amianto',
            'code' => '160111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Zapatas de freno distintas de las especificadas en el código 16 01 11',
            'code' => '160112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos de frenos',
            'code' => '160113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Anticongelantes que contienen sustancias peligrosas',
            'code' => '160114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Anticongelantes distintos de los especificados en el código 16 01 14',
            'code' => '160115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Depósitos para gases licuados',
            'code' => '160116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Metales ferrosos',
            'code' => '160117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Metales no ferrosos',
            'code' => '160118',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Plástico',
            'code' => '160119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vidrio',
            'code' => '160120',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes peligrosos distintos de los especificados en los códigos 16 01 07 a 16 01 11, 16 01 13 y 16 01 14',
            'code' => '160121',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes no especificados en otra categoría',
            'code' => '160122',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados de otra forma',
            'code' => '160199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de equipos eléctricos y electrónicos',
            'code' => '1602',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Transformadores y condensadores que contienen PCB',
            'code' => '160209',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos desechados que contienen PCB, o están contaminados por ellos, distintos de los especificados en el código 16 02 09',
            'code' => '160210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos desechados que contienen clorofluorocarburos, HCFC, HFC',
            'code' => '160211',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos desechados que contienen amianto libre',
            'code' => '160212',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos desechados que contienen componentes peligrosos (2), distintos de los especificados en los códigos 16 02 09 y 16 02 12',
            'code' => '160213',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos desechados distintos de los especificados en los códigos 16 02 09 a 16 02 13',
            'code' => '160214',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes peligrosos retirados de equipos desechados',
            'code' => '160215',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Componentes retirados de equipos desechados distintos de los especificados en el código 16 02 15',
            'code' => '160216',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // -----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Lotes de productos fuera de especificación y productos no utilizados',
            'code' => '1603',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos inorgánicos que contienen sustancias peligrosas',
            'code' => '160303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos inorgánicos distintos de los especificados en el código 16 03 03',
            'code' => '160304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos orgánicos que contienen sustancias peligrosas',
            'code' => '160305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos orgánicos distintos de los especificados en el código 16 03 05',
            'code' => '160306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // -----------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de explosivos',
            'code' => '1604',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de municiones',
            'code' => '160401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de fuegos artificiales',
            'code' => '160402',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos explosivos',
            'code' => '160403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Gases en recipientes a presión y productos químicos desechados',
            'code' => '1605',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Gases en recipientes a presión (incluidos los halones) que contienen sustancias peligrosas',
            'code' => '160504',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Gases en recipientes a presión, distintos de los especificados en el código 16 05 04',
            'code' => '160505',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos de laboratorio que consisten en, o contienen, sustancias peligrosas, incluidas las mezclas de productos químicos de laboratorio',
            'code' => '160506',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos inorgánicos desechados que consisten en, o contienen, sustancias peligrosas',
            'code' => '160507',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos orgánicos desechados que consisten en, o contienen, sustancias peligrosas',
            'code' => '160508',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos desechados distintos de los especificados en los códigos 16 05 06, 16 05 07 o 16 05 08',
            'code' => '160509',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // ---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Pilas y acumuladores',
            'code' => '1606',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Baterías de plomo',
            'code' => '160601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Acumuladores de Ni-Cd',
            'code' => '160602',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Pilas que contienen mercurio',
            'code' => '160603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Pilas alcalinas (excepto 16 06 03)',
            'code' => '160604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras pilas y acumuladores',
            'code' => '160605',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Electrolitos de pilas y acumuladores recogidos selectivamente',
            'code' => '160606',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la limpieza de cisternas de transporte y almacenamiento y de la limpieza de cubas (excepto los de los capítulos 05 y 13)',
            'code' => '1607',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen hidrocarburos',
            'code' => '160708',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos que contienen otras sustancias peligrosas',
            'code' => '160709',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '160799',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------------
        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Catalizadores usados',
            'code' => '1608',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Catalizadores usados que contienen oro, plata, renio, rodio, paladio, iridio o platino (excepto el código 16 08 07)',
            'code' => '160801',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Catalizadores usados que contienen metales de transición (3) peligrosos o compuestos de metales de transición peligrosos',
            'code' => '160802',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Catalizadores usados que contienen metales de transición o compuestos de metales de transición no especificados de otra forma',
            'code' => '160803',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Catalizadores usados procedentes del craqueo catalítico en lecho fluido (excepto los del código 16 08 07)',
            'code' => '160804',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Catalizadores usados que contienen ácido fosfórico',
            'code' => '160805',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Líquidos usados utilizados como catalizadores',
            'code' => '160806',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Catalizadores usados contaminados con sustancias peligrosas',
            'code' => '160807',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Sustancias oxidantes',
            'code' => '1609',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Permanganatos, por ejemplo, permanganato potásico',
            'code' => '160901',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cromatos, por ejemplo, cromato potásico, dicromato sódico o potásico',
            'code' => '160902',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Peróxidos, por ejemplo, peróxido de hidrógeno',
            'code' => '160903',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Sustancias oxidantes no especificadas en otra categoría',
            'code' => '160904',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos líquidos acuosos destinados a plantas de tratamiento externas',
            'code' => '1610',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos que contienen sustancias peligrosas',
            'code' => '161001',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos distintos de los especificados en el código 16 10 01',
            'code' => '161002',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Concentrados acuosos que contienen sustancias peligrosas',
            'code' => '161003',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Concentrados acuosos distintos de los especificados en el código 16 10 03',
            'code' => '161004',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de revestimientos de hornos y refractarios',
            'code' => '1611',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Revestimientos y refractarios a base de carbono, procedentes de procesos metalúrgicos, que contienen sustancias peligrosas',
            'code' => '161101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Revestimientos y refractarios a base de carbono, procedentes de procesos metalúrgicos distintos de los especificados en el código 16 11 01',
            'code' => '161102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros revestimientos y refractarios procedentes de procesos metalúrgicos que contienen sustancias peligrosas',
            'code' => '161103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros revestimientos y refractarios procedentes de procesos metalúrgicos, distintos de los especificados en el código 16 11 03',
            'code' => '161104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Revestimientos y refractarios, procedentes de procesos no metalúrgicos, que contienen sustancias peligrosas',
            'code' => '161105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Revestimientos y refractarios procedentes de procesos no metalúrgicos, distintos de los especificados en el código 16 11 05',
            'code' => '161106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        // END GROUP 16 ********************

        // GROUP 17
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LA CONSTRUCCIÓN Y DEMOLICIÓN (INCLUIDA LA TIERRA EXCAVADA DE ZONAS CONTAMINADAS)',
            'code' => '17'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Hormigón, ladrillos, tejas y materiales cerámicos',
            'code' => '1701',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hormigón',
            'code' => '170101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ladrillos',
            'code' => '170102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tejas y materiales cerámicos',
            'code' => '170103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas, o fracciones separadas, de hormigón, ladrillos, tejas y materiales cerámicos que contienen sustancias peligrosas',
            'code' => '170106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas de hormigón, ladrillos, tejas y materiales cerámicos, distintas de las especificadas en el código 17 01 06',
            'code' => '170107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Madera, vidrio y plástico',
            'code' => '1702',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Madera',
            'code' => '170201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vidrio',
            'code' => '170202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Plástico',
            'code' => '170203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vidrio, plástico y madera que contienen sustancias peligrosas o están contaminados por ellas',
            'code' => '170204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Mezclas bituminosas, alquitrán de hulla y otros productos alquitranados',
            'code' => '1703',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas bituminosas que contienen alquitrán de hulla',
            'code' => '170301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas bituminosas distintas de las especificadas en el código 17 03 01',
            'code' => '170302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Alquitrán de hulla y productos alquitranados',
            'code' => '170303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Metales (incluidas sus aleaciones)',
            'code' => '1704',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cobre, bronce, latón',
            'code' => '170401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aluminio',
            'code' => '170402',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Plomo',
            'code' => '170403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Zinc',
            'code' => '170404',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Hierro y acero',
            'code' => '170405',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Estaño',
            'code' => '170406',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Metales mezclados',
            'code' => '170407',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos metálicos contaminados con sustancias peligrosas',
            'code' => '170409',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cables que contienen hidrocarburos, alquitrán de hulla y otras sustancias peligrosas',
            'code' => '170410',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cables distintos de los especificados en el código 17 04 10',
            'code' => '170411',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Tierra (incluida la excavada de zonas contaminadas), piedras y lodos de drenaje',
            'code' => '1705',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tierra y piedras que contienen sustancias peligrosas',
            'code' => '170503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tierra y piedras distintas de las especificadas en el código 17 05 03',
            'code' => '170504',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de drenaje que contienen sustancias peligrosas',
            'code' => '170505',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de drenaje distintos de los especificados en el código 17 05 05',
            'code' => '170506',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Balasto de vías férreas que contiene sustancias peligrosas',
            'code' => '170507',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Balasto de vías férreas distinto del especificado en el código 17 05 07',
            'code' => '170508',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Materiales de aislamiento y materiales de construcción que contienen amianto',
            'code' => '1706',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales de aislamiento que contienen amianto',
            'code' => '170601',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros materiales de aislamiento que consisten en, o contienen, sustancias peligrosas',
            'code' => '170603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales de aislamiento distintos de los especificados en los códigos 17 06 01 y 17 06 03',
            'code' => '170604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales de construcción que contienen amianto',
            'code' => '170605',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Materiales de construcción a base de yeso',
            'code' => '1708',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales de construcción a base de yeso contaminados con sustancias peligrosas',
            'code' => '170801',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales de construcción a base de yeso distintos de los especificados en el código 17 08 01',
            'code' => '170802',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Otros residuos de construcción y demolición',
            'code' => '1709',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de construcción y demolición que contienen mercurio',
            'code' => '170901',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de construcción y demolición que contienen PCB (por ejemplo, sellantes que contienen PCB, revestimientos de suelo a base de resinas que contienen PCB, acristalamientos dobles que contienen PCB, condensadores que contienen PCB)',
            'code' => '170902',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos de construcción y demolición (incluidos los residuos mezclados) que contienen sustancias peligrosas',
            'code' => '170903',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos mezclados de construcción y demolición distintos de los especificados en los códigos 17 09 01, 17 09 02 y 17 09 03',
            'code' => '170904',
            'cer_subgroup_id' => $subgroup->getId()
        ]);


        // END GROUP 17 ********************

        // GROUP 18
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE SERVICIOS MÉDICOS O VETERINARIOS O DE INVESTIGACIÓN ASOCIADA (salvo los residuos de cocina y de restaurante no procedentes directamente de la prestación de cuidados sanitarios)',
            'code' => '18'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de maternidades, del diagnóstico, tratamiento o prevención de enfermedades humanas',
            'code' => '1801',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Objetos cortantes y punzantes (excepto el código 18 01 03)',
            'code' => '180101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Restos anatómicos y órganos, incluidos bolsas y bancos de sangre (excepto el código 18 01 03)',
            'code' => '180102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cuya recogida y eliminación es objeto de requisitos especiales para prevenir infecciones',
            'code' => '180103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cuya recogida y eliminación no es objeto de requisitos especiales para prevenir infecciones (por ejemplo, vendajes, vaciados de yeso, ropa blanca, ropa desechable, pañales)',
            'code' => '180104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos que consisten en, o contienen, sustancias peligrosas',
            'code' => '180106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos distintos de los especificados en el código 18 01 06',
            'code' => '180107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Medicamentos citotóxicos y citostáticos',
            'code' => '180108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Medicamentos distintos de los especificados en el código 18 01 08',
            'code' => '180109',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de amalgamas procedentes de cuidados dentales',
            'code' => '180110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la investigación, diagnóstico, tratamiento o prevención de enfermedades de animales',
            'code' => '1802',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Objetos cortantes y punzantes (excepto el código 18 02 02)',
            'code' => '180201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cuya recogida y eliminación es objeto de requisitos especiales para prevenir infecciones',
            'code' => '180202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos cuya recogida y eliminación no es objeto de requisitos especiales para prevenir infecciones',
            'code' => '180203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos que consisten en, o contienen, sustancias peligrosas',
            'code' => '180205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Productos químicos distintos de los especificados en el código 18 02 05',
            'code' => '180206',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Medicamentos citotóxicos y citostáticos',
            'code' => '180207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Medicamentos distintos de los especificados en el código 18 02 07',
            'code' => '180208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 18 ********************

        // GROUP 19
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS DE LAS INSTALACIONES PARA EL TRATAMIENTO DE RESIDUOS, DE LAS PLANTAS EXTERNAS DE TRATAMIENTO DE AGUAS RESIDUALES Y DE LA PREPARACIÓN DE AGUA PARA CONSUMO HUMANO Y DE AGUA PARA USO INDUSTRIAL',
            'code' => '19'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la incineración o pirolisis de residuos',
            'code' => '1901',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Materiales férreos separados de la ceniza de fondo de horno',
            'code' => '190102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Torta de filtración del tratamiento de gases',
            'code' => '190105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos del tratamiento de gases y otros residuos líquidos acuosos',
            'code' => '190106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos del tratamiento de gases',
            'code' => '190107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Carbón activo usado procedente del tratamiento de gases',
            'code' => '190110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas de fondo de horno y escorias que contienen sustancias peligrosas',
            'code' => '190111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas de fondo de horno y escorias distintas de las especificadas en el código 19 01 11',
            'code' => '190112',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes que contienen sustancias peligrosas',
            'code' => '190113',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes distintas de las especificadas en el código 19 01 13',
            'code' => '190114',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Polvo de caldera que contiene sustancias peligrosas',
            'code' => '190115',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Polvo de caldera distinto del especificado en el código 19 01 15',
            'code' => '190116',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de pirolisis que contienen sustancias peligrosas',
            'code' => '190117',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de pirolisis distintos de los especificados en el código 19 01 17',
            'code' => '190118',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Arenas de lechos fluidizados',
            'code' => '190119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '190199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // --------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de tratamientos fisicoquímicos de residuos (incluidas la descromatación, descianuración y neutralización)',
            'code' => '1902',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos mezclados previamente, compuestos exclusivamente por residuos no peligrosos',
            'code' => '190203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos mezclados previamente, compuestos por al menos un residuo peligroso',
            'code' => '190204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de tratamientos fisicoquímicos que contienen sustancias peligrosas',
            'code' => '190205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de tratamientos fisicoquímicos, distintos de los especificados en el código 19 02 05',
            'code' => '190206',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites y concentrados procedentes del proceso de separación',
            'code' => '190207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos combustibles líquidos que contienen sustancias peligrosas',
            'code' => '190208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos combustibles sólidos que contienen sustancias peligrosas',
            'code' => '190209',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos combustibles distintos de los especificados en los códigos 19 02 08 y 19 02 09',
            'code' => '190210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos que contienen sustancias peligrosas',
            'code' => '190211',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '190299',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos estabilizados/solidificados (4)',
            'code' => '1903',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos peligrosos parcialmente (5) estabilizados',
            'code' => '190304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos estabilizados distintos de los especificados en el código 19 03 04',
            'code' => '190305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos peligrosos solidificados',
            'code' => '190306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos solidificados distintos de los especificados en el código 19 03 06',
            'code' => '190307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos vitrificados y residuos de la vitrificación',
            'code' => '1904',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos vitrificados',
            'code' => '190401',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Cenizas volantes y otros residuos del tratamiento de gases',
            'code' => '190402',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fase sólida no vitrificada',
            'code' => '190403',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos líquidos acuosos del templado de residuos vitrificados',
            'code' => '190404',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del tratamiento aeróbico de residuos sólidos',
            'code' => '1905',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fracción no compostada de residuos municipales y asimilados',
            'code' => '190501',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fracción no compostada de residuos de procedencia animal o vegetal',
            'code' => '190502',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Compost fuera de especificación',
            'code' => '190503',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '190599',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del tratamiento anaeróbico de residuos',
            'code' => '1906',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Licores del tratamiento anaeróbico de residuos municipales',
            'code' => '190603',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de digestión del tratamiento anaeróbico de residuos municipales',
            'code' => '190604',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Licores del tratamiento anaeróbico de residuos animales y vegetales',
            'code' => '190605',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de digestión del tratamiento anaeróbico de residuos animales y vegetales',
            'code' => '190606',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '190699',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Lixiviados de vertedero',
            'code' => '1907',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lixiviados de vertedero que contienen sustancias peligrosas',
            'code' => '190702',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lixiviados de vertedero distintos de los especificados en el código 19 07 02',
            'code' => '190703',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de plantas de tratamiento de aguas residuales no especificados en otra categoría',
            'code' => '1908',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de cribado',
            'code' => '190801',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de desarenado',
            'code' => '190802',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento de aguas residuales urbanas',
            'code' => '190805',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Resinas intercambiadoras de iones saturadas o usadas',
            'code' => '190806',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones y lodos de la regeneración de intercambiadores de iones',
            'code' => '190807',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos procedentes de sistemas de membranas que contienen metales pesados',
            'code' => '190808',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas de grasas y aceites procedentes de la separación de agua/sustancias aceitosas que sólo contienen aceites y grasas comestibles',
            'code' => '190809',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas de grasas y aceites procedentes de la separación de agua/sustancias aceitosas distintas de las especificadas en el código 19 08 09',
            'code' => '190810',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos que contienen sustancias peligrosas procedentes del tratamiento biológico de aguas residuales industriales',
            'code' => '190811',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos procedentes del tratamiento biológico de aguas residuales industriales distintos de los especificados en el código 19 08 11',
            'code' => '190812',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos que contienen sustancias peligrosas procedentes de otros tratamientos de aguas residuales industriales',
            'code' => '190813',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos procedentes de otros tratamientos de aguas residuales industriales, distintos de los especificados en el código 19 08 13',
            'code' => '190814',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '190899',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //-----------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la preparación de agua para consumo humano o agua para uso industrial',
            'code' => '1909',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos de la filtración primaria y cribado',
            'code' => '190901',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de la clarificación del agua',
            'code' => '190902',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de descarbonatación',
            'code' => '190903',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Carbón activo usado',
            'code' => '190904',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Resinas intercambiadoras de iones saturadas o usadas',
            'code' => '190905',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Soluciones y lodos de la regeneración de intercambiadores de iones',
            'code' => '190906',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '190999',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //------------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos procedentes del fragmentado de residuos que contienen metales',
            'code' => '1910',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de hierro y acero',
            'code' => '191001',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no férreos',
            'code' => '191002',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fracciones ligeras de fragmentación (fluff-light) y polvo que contienen sustancias peligrosas',
            'code' => '191003',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Fracciones ligeras de fragmentación (fluff-light) y polvo distintas de las especificadas en el código 19 10 03',
            'code' => '191004',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras fracciones que contienen sustancias peligrosas',
            'code' => '191005',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras fracciones distintas de las especificadas en el código 19 10 05',
            'code' => '191006',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la regeneración de aceites',
            'code' => '1911',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Arcillas de filtración usadas',
            'code' => '191101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Alquitranes ácidos',
            'code' => '191102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de líquidos acuosos',
            'code' => '191103',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la limpieza de combustibles con bases',
            'code' => '191104',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes que contienen sustancias peligrosas',
            'code' => '191105',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos del tratamiento in situ de efluentes, distintos de los especificados en el código 19 11 05',
            'code' => '191106',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la depuración de efluentes gaseosos',
            'code' => '191107',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos no especificados en otra categoría',
            'code' => '191199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos del tratamiento mecánico de residuos (por ejemplo, clasificación, trituración, compactación, peletización) no especificados en otra categoría',
            'code' => '1912',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Papel y cartón',
            'code' => '191201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Metales férreos',
            'code' => '191202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Metales no férreos',
            'code' => '191203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Plástico y caucho',
            'code' => '191204',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vidrio',
            'code' => '191205',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Madera que contiene sustancias peligrosas',
            'code' => '191206',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Madera distinta de la especificada en el código 19 12 06',
            'code' => '191207',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Textiles',
            'code' => '191208',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Minerales (por ejemplo, arena, piedras)',
            'code' => '191209',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos combustibles (combustible derivado de residuos)',
            'code' => '191210',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos (incluidas mezclas de materiales) procedentes del tratamiento mecánico de residuos que contienen sustancias peligrosas',
            'code' => '191211',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos (incluidas mezclas de materiales) procedentes del tratamiento mecánico de residuos, distintos de los especificados en el código 19 12 11',
            'code' => '191212',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //---------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de la recuperación de suelos y de aguas subterráneas',
            'code' => '1913',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos de la recuperación de suelos que contienen sustancias peligrosas',
            'code' => '191301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos sólidos de la recuperación de suelos distintos de los especificados en el código 19 13 01',
            'code' => '191302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de la recuperación de suelos que contienen sustancias peligrosas',
            'code' => '191303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de la recuperación de suelos distintos de los especificados en el código 19 13 03',
            'code' => '191304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de la recuperación de aguas subterráneas que contienen sustancias peligrosas',
            'code' => '191305',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de la recuperación de aguas subterráneas distintos de los especificados en el código 19 13 05',
            'code' => '191306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de líquidos acuosos y concentrados acuosos, que contienen sustancias peligrosas, procedentes de la recuperación de aguas subterráneas',
            'code' => '191307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de líquidos acuosos y concentrados acuosos procedentes de la recuperación de aguas subterráneas, distintos de los especificados en el código 19 13 07',
            'code' => '191308',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 19 ********************

        // GROUP 20
        $group = \App\CerGroup::firstOrCreate([
            'name' => 'RESIDUOS MUNICIPALES (RESIDUOS DOMÉSTICOS Y RESIDUOS ASIMILABLES PROCEDENTES DE LOS COMERCIOS, INDUSTRIAS E INSTITUCIONES), INCLUIDAS LAS FRACCIONES RECOGIDAS SELECTIVAMENTE',
            'code' => '20'
        ]);

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Fracciones recogidas selectivamente (excepto las incluidas en el subcapítulo 1501)',
            'code' => '2001',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Papel y cartón',
            'code' => '200101',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Vidrio',
            'code' => '200102',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos biodegradables de cocinas y restaurantes',
            'code' => '200108',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Ropa',
            'code' => '200110',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tejidos',
            'code' => '200111',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Plaguicidas',
            'code' => '200119',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tubos fluorescentes y otros residuos que contienen mercurio',
            'code' => '200121',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos desechados que contienen clorofluorocarburos',
            'code' => '200123',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites y grasas comestibles',
            'code' => '200125',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Aceites y grasas distintos de los especificados en el código 20 01 25',
            'code' => '200126',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Pinturas, tintas, adhesivos y resinas que contienen sustancias peligrosas',
            'code' => '200127',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Pinturas, tintas, adhesivos y resinas distintos de los especificados en el código 20 01 27',
            'code' => '200128',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Detergentes que contienen sustancias peligrosas',
            'code' => '200129',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Detergentes distintos de los especificados en el código 20 01 29',
            'code' => '200130',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Medicamentos citotóxicos y citostáticos',
            'code' => '200131',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Medicamentos distintos de los especificados en el código 20 01 31',
            'code' => '200132',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Baterías y acumuladores especificados en los códigos 16 06 01, 16 06 02 o 16 06 03 y baterías y acumuladores sin clasificar que contienen esas baterías',
            'code' => '200133',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Baterías y acumuladores distintos de los especificados en el código 20 01 33',
            'code' => '200134',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos eléctricos y electrónicos desechados, distintos de los especificados en los códigos 20 01 21 y 20 01 23, que contienen componentes peligrosos (6)',
            'code' => '200135',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Equipos eléctricos y electrónicos desechados distintos de los especificados en los códigos 20 01 21, 20 01 23 y 20 01 35',
            'code' => '200136',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Madera que contiene sustancias peligrosas',
            'code' => '200137',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Madera distinta de la especificada en el código 20 01 37',
            'code' => '200138',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Plásticos',
            'code' => '200139',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Metales',
            'code' => '200140',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos del deshollinado de chimeneas',
            'code' => '200141',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otras fracciones no especificadas en otra categoría',
            'code' => '200199',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //--------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Residuos de parques y jardines (incluidos los residuos de cementerios)',
            'code' => '2002',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos biodegradables',
            'code' => '200201',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Tierra y piedras',
            'code' => '200202',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Otros residuos no biodegradables',
            'code' => '200203',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        //----------------------

        $subgroup = \App\CerSubgroup::firstOrCreate([
            'name' => 'Otros residuos municipales',
            'code' => '2003',
            'cer_group_id' => $group->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Mezclas de residuos municipales',
            'code' => '200301',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de mercados',
            'code' => '200302',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de limpieza viaria',
            'code' => '200303',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Lodos de fosas sépticas',
            'code' => '200304',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos de la limpieza de alcantarillas',
            'code' => '200306',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos voluminosos',
            'code' => '200307',
            'cer_subgroup_id' => $subgroup->getId()
        ]);
        $code = \App\CerCode::firstOrCreate([
            'name' => 'Residuos municipales no especificados en otra categoría',
            'code' => '200399',
            'cer_subgroup_id' => $subgroup->getId()
        ]);

        // END GROUP 20 ********************
    }
}
