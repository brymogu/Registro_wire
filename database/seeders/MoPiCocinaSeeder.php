<?php

namespace Database\Seeders;

use App\Models\Mats_piso_cocina;
use Illuminate\Database\Seeder;

class MoPiCocinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_cocina();
        $material->nombre =  "Otro";
        $material->save();

        $material2 = new Mats_piso_cocina();
        $material2->nombre = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_cocina();
        $material3->nombre = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_cocina();
        $material4->nombre = "Mármol";
        $material4->save();

        $material5 = new Mats_piso_cocina();
        $material5->nombre = "Laminado";
        $material5->save();
    }
}
