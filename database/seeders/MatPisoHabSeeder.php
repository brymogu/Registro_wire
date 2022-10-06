<?php

namespace Database\Seeders;

use App\Models\Mats_piso_habitacion;
use Illuminate\Database\Seeder;

class MatPisoHabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_habitacion();
        $material->nombre =  "Otro";
        $material->save();

        $material2 = new Mats_piso_habitacion();
        $material2->nombre = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_habitacion();
        $material3->nombre = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_habitacion();
        $material4->nombre = "Mármol";
        $material4->save();

        $material5 = new Mats_piso_habitacion();
        $material5->nombre = "Laminado";
        $material5->save();

        $material6 = new Mats_piso_habitacion();
        $material6->nombre = "Madera lacada";
        $material6->save();

        $material7 = new Mats_piso_habitacion();
        $material7->nombre = "Alfombra";
        $material7->save();
    }
}
