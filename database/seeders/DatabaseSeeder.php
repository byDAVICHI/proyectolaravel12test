<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            // Otros seeders que quieras ejecutar
        ]);

        User::factory(10)->create(); // Crea 10 usuarios usando el UserFactory
        Post::factory(10)->create(); // Crea 10 posts usando el PostFactory
        // Puedes agregar más factories según sea necesario

    }
}
