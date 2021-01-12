<?php

use App\Models\OrdenDeCompra;
use Illuminate\Database\Seeder;

class OrdenDeCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrdenDeCompra::Class,30)->create();
    }
}
