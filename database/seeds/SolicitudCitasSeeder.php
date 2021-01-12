<?php

use App\Models\SolicitudCitas;
use Illuminate\Database\Seeder;

class SolicitudCitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SolicitudCitas::Class,60)->create();
    }
}
