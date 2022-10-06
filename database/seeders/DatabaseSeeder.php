<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TDocSeeder::class);
        $this->call(TiposNegocioSeeder::class);
        $this->call(TiposPropietarioSeeder::class);
        $this->call(TiposInmuebleSeeder::class);
        $this->call(EstadoInmuebleSeeder::class);
        $this->call(EstratoSeeder::class);
        $this->call(RemodeladoSeed::class);
        $this->call(NivelesSeeder::class);
        $this->call(MatPisoHabSeeder::class);
        $this->call(MobCocinaSeeder::class);
        $this->call(MatPisoBanoSeeder::class);
        $this->call(MoPiCocinaSeeder::class);
        $this->call(MatPisoZsocialSeeder::class);
        $this->call(EstufasSeeder::class);
        $this->call(HornosSeeder::class);
        $this->call(CalentadoresSeeder::class);
        $this->call(VistaSeeder::class);
        $this->call(NoGarajesSeeder::class);
        $this->call(CuidadesyDepartamentos::class);
        $this->call(AscensoresSeeder::class);
        $this->call(TiposCortinasSeeder::class);
        $this->call(VigilanciaSeeder::class);
        $this->call(SeguridadSeeder::class);
        $this->call(PlanesSeeder::class); 
    }
}
