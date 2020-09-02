<?php

use Illuminate\Database\Seeder;
class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Horario')->insert([
            'Horario' => '11:00 AM - 12:00 PM',
        ]);
        DB::table('Horario')->insert([
            'Horario' => '12:00 PM - 1:00 PM',
        ]);
        DB::table('Horario')->insert([
            'Horario' => '1:00 PM - 2:00 PM',
        ]);
        DB::table('Horario')->insert([
            'Horario' => '2:00 PM - 3:00 PM',
        ]);
        DB::table('Horario')->insert([
            'Horario' => '5:00 PM - 6:00 PM',
        ]);
        DB::table('Horario')->insert([
            'Horario' => '6:00 PM - 7:00 PM',
        ]);
    }
}
