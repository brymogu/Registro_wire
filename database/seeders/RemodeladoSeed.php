<?php

namespace Database\Seeders;

use App\Models\Remodelados;
use Illuminate\Database\Seeder;

class RemodeladoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Remodelado = new Remodelados();
        $Remodelado->nombre= "Total";
        $Remodelado->save();

        $Remodelado2 = new Remodelados();
        $Remodelado2->nombre = "Parcial";
        $Remodelado2->save();

        $Remodelado3 = new Remodelados();
        $Remodelado3->nombre = "No";
        $Remodelado3->save();  
    }
}
