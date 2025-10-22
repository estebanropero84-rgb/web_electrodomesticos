<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Ejecuta el seeder.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Neveras', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Lavadoras', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Microondas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Televisores', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Aspiradoras', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
