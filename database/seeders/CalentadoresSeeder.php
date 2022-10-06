<?php

namespace Database\Seeders;

use App\Models\Calentadores;
use Illuminate\Database\Seeder;

class CalentadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $calentador = new Calentadores();
        $calentador->nombre = "Gas natural de paso";
        $calentador->save();

        $calentador2 = new Calentadores();
        $calentador2->nombre = "Gas natural caldera";
        $calentador2->save();

        $calentador3 = new Calentadores();
        $calentador3->nombre = "Eléctrico de paso";
        $calentador3->save();

        $calentador5 = new Calentadores();
        $calentador5->nombre = "Ducha eléctrica";
        $calentador5->save();

        $calentador4 = new Calentadores();
        $calentador4->nombre = "No tiene";
        $calentador4->save();
    }
}
