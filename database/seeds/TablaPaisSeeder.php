<?php

use Illuminate\Database\Seeder;

class TablaPaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([

            ['nombre' => 'Colombia', 'bandera' => null ,'moneda' => 'COP'],
            ['nombre' => 'Venezuela', 'bandera' => null ,'moneda' => 'BsS'],
            ['nombre' => 'Chile', 'bandera' => null ,'moneda' => 'CLP'],
            ['nombre' => 'Perú', 'bandera' => null ,'moneda' => 'PEN'],
            ['nombre' => 'EEUU', 'bandera' => null ,'moneda' => 'USD'],
            ['nombre' => 'Todos', 'bandera' => null ,'moneda' => null],


    
        ]);
    }
}
