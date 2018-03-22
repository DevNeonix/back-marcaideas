<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GrupoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(LugaresSeeder::class);
        $this->call(OfertaSeeder::class);
        $this->call(EventoSeeder::class);
    }
}
