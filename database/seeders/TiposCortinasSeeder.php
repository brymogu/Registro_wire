<?php

namespace Database\Seeders;

use App\Models\TiposCortina;
use Illuminate\Database\Seeder;

class TiposCortinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cortina = new TiposCortina();
        $cortina->nombre = "Blackout";
        $cortina->save();

        $cortina2 = new TiposCortina();
        $cortina2->nombre = "Screen";
        $cortina2->save();

        $cortina3 = new TiposCortina();
        $cortina3->nombre = "Persianas";
        $cortina3->save();

        $cortina4 = new TiposCortina();
        $cortina4->nombre = "Paneles";
        $cortina4->save();

        $cortina5 = new TiposCortina();
        $cortina5->nombre = "Pesadas";
        $cortina5->save();

        $cortina6 = new TiposCortina();
        $cortina6->nombre = "Velos";
        $cortina6->save();
    }
}
