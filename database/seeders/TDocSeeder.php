<?php

namespace Database\Seeders;

use App\Models\Tipos_documento;
use Illuminate\Database\Seeder;

class TDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $documentos = new Tipos_documento();
        $documentos->nombre = "Cédula de ciudadanía";
        $documentos->desc_nombres_corto = "CC";
        $documentos->save();

        $documentos2 = new Tipos_documento();
        $documentos2->nombre = "Cédula de extranjería";
        $documentos2->desc_nombres_corto = "CE";
        $documentos2->save();

        $documentos3 = new Tipos_documento();
        $documentos3->nombre = "NIT";
        $documentos3->desc_nombres_corto = "NIT";
        $documentos3->save();

        $documentos4 = new Tipos_documento();
        $documentos4->nombre = "Pasaporte";
        $documentos4->desc_nombres_corto = "PSP";
        $documentos4->save();
    }
}
