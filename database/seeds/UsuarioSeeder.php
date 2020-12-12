<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@gmail.com',
            'password' =>  Hash::make('administrador'),
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'SECRETARIA',
            'email' => 'secretaria@gmail.com',
            'password' =>  Hash::make('secretaria'),
            'created_at'=> date_create()->format('Y-m-d H:i:s'),
            'updated_at'=> date_create()->format('Y-m-d H:i:s')
        ]);
    }
}
