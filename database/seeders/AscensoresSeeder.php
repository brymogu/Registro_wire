<?php

namespace Database\Seeders;

use App\Models\Ascensor;
use Illuminate\Database\Seeder;

class AscensoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ascensor2 = new Ascensor();
        $ascensor2->nombre = "1";
        $ascensor2->save();

        $ascensor3 = new Ascensor();
        $ascensor3->nombre = "2";
        $ascensor3->save();

        $ascensor4 = new Ascensor();
        $ascensor4->nombre = "3 o más";
        $ascensor4->save();

        $ascensor = new Ascensor();
        $ascensor->nombre = "No tiene";
        $ascensor->save();
    }
}
