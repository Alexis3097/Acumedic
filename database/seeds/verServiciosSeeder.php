<?php

use App\Models\VerServicios;
use Illuminate\Database\Seeder;

class verServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verServicios = VerServicios::create([
            'Servicios' => false
        ]);
    }
}
