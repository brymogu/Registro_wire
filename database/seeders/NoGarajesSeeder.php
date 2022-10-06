<?php

namespace Database\Seeders;

use App\Models\tipo_garajes;
use Illuminate\Database\Seeder;

class NoGarajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $garajes = new tipo_garajes();
        $garajes->nombre =  "Independiente(s)";
        $garajes->save();

        $garajes2 = new tipo_garajes();
        $garajes2->nombre = "Servidumbre";
        $garajes2->save();

        $garajes3 = new tipo_garajes();
        $garajes3->nombre = "En línea";
        $garajes3->save();

    }
}
