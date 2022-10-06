<?php

namespace Database\Seeders;

use App\Models\TiposPropietario;
use Illuminate\Database\Seeder;

class TiposPropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo = new TiposPropietario();
        $tipo->nombre = "Soy propietario";
        $tipo->save();

        $tipo2 = new TiposPropietario();
        $tipo2->nombre= "Soy apoderado";
        $tipo2->save();

        $tipo3 = new TiposPropietario();
        $tipo3->nombre= "Soy agente inmobiliario";
        $tipo3->save();

        $tipo4 = new TiposPropietario();
        $tipo4->nombre= "Quiero comprar o arrendar";
        $tipo4->save();
    }
}
