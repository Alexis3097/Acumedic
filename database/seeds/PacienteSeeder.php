<?php

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Paciente::Class,60)->create();
    }
}
