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
        $this->call(SobreAcumedicSeeder::class);
        $this->call(verServiciosSeeder::class);
        $this->call(EstatusOrdenSeeder::class);
        $this->call(PacienteSeeder::class);//datos de prueba
        $this->call(UserSeed::class);//datos de prueba
        $this->call(CitaSeeder::class);//datos de prueba
        $this->call(ProductoSeeder::class);//datos de prueba
        $this->call(ServicioSeeder::class);//datos de prueba
        
    }
}
