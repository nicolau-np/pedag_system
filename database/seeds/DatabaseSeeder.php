<?php


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
        $this->call([
            PaisSeeder::class,
            ProvinciaSeeder::class,
            MunicipioSeeder::class,
            BloqueiosSeeder::class,
            CargoSeeder::class,
            CompoDisciplinaSeeder::class,
            EnsinoSeeder::class,
            EpocaDisciplinaSeeder::class,
            SemanaSeeder::class,
            TipoDesistenciaSeeder::class,
            TipoEscalaoSeeder::class,
            TipoFaltaSeeder::class,
            TipoPermicaoSeeder::class,
            TipoSalaSeeder::class,
            TurnoSeeder::class,
        ]);
    }
}