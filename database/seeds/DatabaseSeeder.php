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
        $this->call(EstatusConsultaSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(TipoConsultaSeeder::class);
        $this->call(UsuarioSeeder::class);
        
    }
}
