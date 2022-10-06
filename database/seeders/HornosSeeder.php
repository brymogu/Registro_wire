<?php

namespace Database\Seeders;

use App\Models\Tipos_horno;
use Illuminate\Database\Seeder;

class HornosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $horno = new Tipos_horno();
        $horno->nombre =  "No Tiene";
        $horno->save();

        $horno2 = new Tipos_horno();
        $horno2->nombre = "Gas Natural";
        $horno2->save();

        $horno3 = new Tipos_horno();
        $horno3->nombre = "Eléctrico";
        $horno3->save();
    }
}
