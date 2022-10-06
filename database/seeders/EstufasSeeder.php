<?php

namespace Database\Seeders;

use App\Models\Tipos_estufa;
use Illuminate\Database\Seeder;

class EstufasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estufa = new Tipos_estufa();
        $estufa->nombre =  "No Tiene";
        $estufa->save();

        $estufa2 = new Tipos_estufa();
        $estufa2->nombre = "Gas Natural";
        $estufa2->save();

        $estufa3 = new Tipos_estufa();
        $estufa3->nombre = "Eléctrica";
        $estufa3->save();

        $estufa4 = new Tipos_estufa();
        $estufa4->nombre = "Cilindro";
        $estufa4->save();
    }
}
