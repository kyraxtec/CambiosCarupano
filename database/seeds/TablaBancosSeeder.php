<?php

use Illuminate\Database\Seeder;

class TablaBancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bancos')->insert([
            'pais' => 2,
            'nombre' => 'Banco Nacional de Credito',
            'abrev' => 'BNC',
            'prefijo' => '0191',
              ]);
    }
}
