<?php

namespace Database\Seeders;

use App\Models\Planes;
use Illuminate\Database\Seeder;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $plan = new Planes();
        $plan->nombre = "Básico";
        $plan->save();

        $plan2 = new Planes();
        $plan2->nombre = "Estándar";
        $plan2->save();

        $plan3 = new Planes();
        $plan3->nombre = "Premium";
        $plan3->save();
    }
}
