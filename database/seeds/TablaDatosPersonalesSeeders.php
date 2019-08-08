<?php

use Illuminate\Database\Seeder;

class TablaDatosPersonalesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_personales')->insert([
            'usuario' => 1,
            'nombre' => 'John',
            'apellido' => 'Doe',
            'fechanac' => '1970/01/01',
            'iddoctype' => 'V',
            'iddocnum' => '12345678998'
              ]);
    
         DB::table('datos_personales')->insert([
            'usuario' => 2,
            'nombre' => 'Jane',
            'apellido' => 'Doe',
            'fechanac' => '1980/08/08',
            'iddoctype' => 'E',
            'iddocnum' => '89987654321'
              ]);             
    }
}
