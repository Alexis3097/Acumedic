<?php

use Illuminate\Database\Seeder;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CITAS
        DB::table('permissions')->insert([
            'name' => 'ListadoCitas',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'CrearCita',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        DB::table('permissions')->insert([
            'name' => 'EditarCita',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        DB::table('permissions')->insert([
            'name' => 'EliminarCita',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        //PACIENTES
        DB::table('permissions')->insert([
            'name' => 'ListadoPacientes',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'CrearPaciente',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'EditarPaciente',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'EliminarPaciente',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        //FICHAS
        DB::table('permissions')->insert([
            'name' => 'ListadoFicha',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'CrearFicha',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'name' => 'EditarFicha',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'name' => 'EliminarFicha',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);

        //CONSULTA
        DB::table('permissions')->insert([
            'name' => 'Consulta',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'Historial',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        DB::table('permissions')->insert([
            'name' => 'InicarConsulta',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        DB::table('permissions')->insert([
            'name' => 'Antecedentes',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        DB::table('permissions')->insert([
            'name' => 'EstudiosGabinete',
            'guard_name' => 'web',
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);

    }
}
