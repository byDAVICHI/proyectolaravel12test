<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $post = new Post();

        $post->title = 'Mi primer post 1';
        $post->content = 'Contenido del primer post 1';
        $post->slug = 'mi-primer-post-1'; // Agrega el campo slug
        $post->categoria = 'Categoria 1';
        $post->published_at = '2025-08-09 23:14:00';
        $post->save();

        $post = new Post();

        $post->title = 'Mi primer post 2';
        $post->content = 'Contenido del primer post 2';
        $post->slug = 'mi-primer-post-2'; // Agrega el campo slug
        $post->categoria = 'Categoria 2';
        $post->published_at = '2025-08-09 23:14:00';
        $post->save();


    }
}
