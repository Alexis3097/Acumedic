<?php

use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sexo')->insert([
            'Sexo' => 'Hombre',
        ]);

        DB::table('Sexo')->insert([
            'Sexo' => 'Mujer',
        ]);

        DB::table('Sexo')->insert([
            'Sexo' => 'Prefiero no decirlo',
        ]);
    }
}
