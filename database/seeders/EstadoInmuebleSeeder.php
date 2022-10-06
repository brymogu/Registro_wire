<?php

namespace Database\Seeders;

use App\Models\Estados_inmueble;
use Illuminate\Database\Seeder;

class EstadoInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $estado = new Estados_inmueble();
        $estado->nombre= "Sobre Planos";
        $estado->save();

        $estado2 = new Estados_inmueble();
        $estado2->nombre = "En Construcción";
        $estado2->save();

        $estado3 = new Estados_inmueble();
        $estado3->nombre = "Para Estrenar";
        $estado3->save();

        $estado4 = new Estados_inmueble();
        $estado4->nombre = "Remodelado";
        $estado4->save();

        $estado5 = new Estados_inmueble();
        $estado5->nombre = "Usado sin Remodelar";
        $estado5->save();
    }
}
