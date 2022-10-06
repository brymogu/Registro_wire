<?php

namespace Database\Seeders;

use App\Models\Mats_piso_bano;
use Illuminate\Database\Seeder;

class MatPisoBanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_bano();
        $material->nombre =  "Otro";
        $material->save();

        $material2 = new Mats_piso_bano();
        $material2->nombre = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_bano();
        $material3->nombre = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_bano();
        $material4->nombre = "Mármol";
        $material4->save();
    }
}
