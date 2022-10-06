<?php

namespace Database\Seeders;

use App\Models\Mb_cocina;
use Illuminate\Database\Seeder;

class MobCocinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mobiliario = new Mb_cocina();
        $mobiliario->nombre =  "Integral";
        $mobiliario->save();

        $mobiliario2 = new Mb_cocina();
        $mobiliario2->nombre = "Seminitegral";
        $mobiliario2->save();
    }
}
