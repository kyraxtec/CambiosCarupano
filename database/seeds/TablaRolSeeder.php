<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols =[
            'administrador',
            'usuario'
        ];
        foreach($rols as $key => $value){
            DB::table('roles')->insert([
                'rol'=> $value
            ]);
        }
    }
}
