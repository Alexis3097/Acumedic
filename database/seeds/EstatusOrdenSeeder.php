<?php
use App\Models\EstatusOrden;
use Illuminate\Database\Seeder;

class EstatusOrdenSeeder extends Seeder
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
            'Estatus'=> 'Completado'
        ]);
        EstatusOrden::create([
            'Estatus'=> 'Cancelado'
        ]);
    }
}
