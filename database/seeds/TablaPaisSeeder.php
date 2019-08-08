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
        {
            $paises =[
                'Colombia',
                'Venezuela',
                'Chile',
                'Perú',
                'EEUU',
                'Todos'
            ];
            foreach($paises as $key => $value){
                DB::table('paises')->insert([
                    'nombre'=> $value
                ]);
            }
        }
    }
}
