<?php

use Illuminate\Database\Seeder;

class TablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuarios')->insert([
        'email' => 'admin@cambioscarupano',
        'password' => bcrypt('pass123456'),
        'rol' => 1,
        'pais' => 1
        ]);
      DB::table('usuarios')->insert([
        'email' => 'user@cambioscarupano',
        'password' => bcrypt('pass654321'),
        'rol' => 2,
        'pais' => 1
        ]);
    }
}
