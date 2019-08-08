<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'roles', 'usuarios', 'datos_personales', 'paises', 'bancos', 'monedas', 'tasas'       
        ]);

        $this->call(TablaPaisSeeder::class);
        $this->call(TablaRolSeeder::class);
        $this->call(TablaUsuarioSeeder::class);
        $this->call(TablaDatosPersonalesSeeders::class);
        $this->call(TablaBancosSeeder::class);
        $this->call(TablaMonedaSeeder::class);
        $this->call(TablaTasasSeeder::class);

    }
    protected function truncateTablas(array $tablas)
    {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            foreach($tablas as $tabla){
                DB::table($tabla)->truncate();
            }
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
