<?php

use App\Models\EstatusOrden;
use Illuminate\Database\Seeder;

class EstausOrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstatusOrden::create([
            'Estatus'=> 'Pendiente',
        ]);
        EstatusOrden::create([
            'Estatus'=> 'En proceso'
        ]);
        EstatusOrden::create([
            'Estatus'=> 'Finalizado'
        ]);
    }
}
