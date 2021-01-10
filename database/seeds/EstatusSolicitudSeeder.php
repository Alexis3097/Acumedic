<?php
use App\Models\EstatusSolicitud;
use Illuminate\Database\Seeder;

class EstatusSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstatusSolicitud::create([
            'Estatus'=> 'Pendiente',
        ]);
        EstatusSolicitud::create([
            'Estatus'=> 'En proceso'
        ]);
        EstatusSolicitud::create([
            'Estatus'=> 'Completado'
        ]);
        EstatusSolicitud::create([
            'Estatus'=> 'Cancelado'
        ]);
    }
}
