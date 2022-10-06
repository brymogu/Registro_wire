<?php

namespace Database\Seeders;

use App\Models\Vista;
use Illuminate\Database\Seeder;

class VistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vista = new Vista();
        $vista->nombre = "Exterior";
        $vista->save();

        $vista2 = new Vista();
        $vista2->nombre = "Interior";
        $vista2->save();
    }
}
