<?php

use Illuminate\Database\Seeder;

class TablaMonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monedas')->insert([

            [
            'pais' => 1,
            'moneda' => 'Peso Colombiano',
            'abrev' => 'COP'
            ],
            [
            'pais' => 2,
            'moneda' => 'Bolivar Soberano',
            'abrev' => 'BsS'
            ],
            [
            'pais' => 3,
            'moneda' => 'Peso Chileno',
            'abrev' => 'CLP'
            ],
            [
            'pais' => 4,
            'moneda' => 'Sol',
            'abrev' => 'PEN'
            ],
            [
            'pais' => 5,
            'moneda' => 'Dólar Americano',
            'abrev' => 'USD'
            ],
            [
            'pais' => 6,
            'moneda' => 'PayPal',
            'abrev' => 'PPL'
            ]
        ]);
    }
}
