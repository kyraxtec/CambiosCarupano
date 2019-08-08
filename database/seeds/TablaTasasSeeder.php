<?php

use Illuminate\Database\Seeder;

class TablaTasasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasas')->insert([

            ['pais' => 1,'moneda' => 5],
            ['pais' => 1,'moneda' => 2],
            ['pais' => 1,'moneda' => 3],
            ['pais' => 1,'moneda' => 4],

            ['pais' => 2,'moneda' => 5],
            ['pais' => 2,'moneda' => 1],
            ['pais' => 2,'moneda' => 3],
            ['pais' => 2,'moneda' => 4],

            ['pais' => 3,'moneda' => 5],
            ['pais' => 3,'moneda' => 1],
            ['pais' => 3,'moneda' => 2],
            ['pais' => 3,'moneda' => 4],

            ['pais' => 4,'moneda' => 5],
            ['pais' => 4,'moneda' => 1],
            ['pais' => 4,'moneda' => 2],
            ['pais' => 4,'moneda' => 3],

            ['pais' => 5,'moneda' => 1],
            ['pais' => 5,'moneda' => 2],
            ['pais' => 5,'moneda' => 3],
            ['pais' => 5,'moneda' => 4],

            ['pais' => 6,'moneda' => 6],
        ]);
    }
}
