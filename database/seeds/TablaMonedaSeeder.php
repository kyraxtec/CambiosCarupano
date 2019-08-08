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
            'moneda' => 'Peso Colombiano',
            'abrev' => 'COP'
            ],
            [
            'moneda' => 'Bolivar Soberano',
            'abrev' => 'BsS'
            ],
            [
            'moneda' => 'Peso Chileno',
            'abrev' => 'CLP'
            ],
            [
            'moneda' => 'Sol',
            'abrev' => 'PEN'
            ],
            [
            'moneda' => 'Dólar Americano',
            'abrev' => 'USD'
            ],
            [
            'moneda' => 'PayPal',
            'abrev' => 'PPL'
            ]
        ]);
    }
}
