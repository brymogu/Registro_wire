<?php

namespace Database\Seeders;

use App\Models\Tipos_negocios;
use Illuminate\Database\Seeder;

class TiposNegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo = new Tipos_negocios();
        $tipo->nombre = "Venta";
        $tipo->save();

        $tipo2 = new Tipos_negocios();
        $tipo2->nombre= "Arriendo";
        $tipo2->save();
    }
}
