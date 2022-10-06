<?php

namespace Database\Seeders;

use App\Models\Tipos_vigilancia;

use Illuminate\Database\Seeder;

class VigilanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $vigilancia = new Tipos_vigilancia();
        $vigilancia->nombre = "12 horas";
        $vigilancia->save();  

        $vigilancia2 = new Tipos_vigilancia();
        $vigilancia2->nombre = "24 horas";
        $vigilancia2->save();              
    }
}
