<?php

namespace Database\Seeders;

use App\Models\Tipos_seguridad;
use Illuminate\Database\Seeder;

class SeguridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $seguridad = new Tipos_seguridad();
        $seguridad->nombre = "Vigilante";
        $seguridad->save();

        $seguridad2 = new Tipos_seguridad();
        $seguridad2->nombre = "Digital";
        $seguridad2->save();

        $seguridad4 = new Tipos_seguridad();
        $seguridad4->nombre = "Vigilante y digital";
        $seguridad4->save();

        $seguridad3 = new Tipos_seguridad();
        $seguridad3->nombre = "Ninguno";
        $seguridad3->save();
    }
}
