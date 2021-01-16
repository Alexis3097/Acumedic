<?php

use App\Models\VerSeccion;
use Illuminate\Database\Seeder;

class VerSeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        VerSeccion::create([
            'Nombre' => 'Segunda seccion',
            'Ver' => true,
        ]);

        VerSeccion::create([
            'Nombre' => 'Servicios visibles',
            'Ver' => false,
        ]);
        
    }
}
