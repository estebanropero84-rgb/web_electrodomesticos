<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta todos los seeders registrados.
     */
    public function run(): void
    {
        // Crear usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678') // contraseña segura
        ]);

        // Insertar categorías predeterminadas de electrodomésticos
        DB::table('categorias')->insert([
            ['nombre' => 'Neveras', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Lavadoras', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Microondas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Televisores', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Aspiradoras', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
