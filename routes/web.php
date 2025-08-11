<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;


Route::get('/home', [HomeController::class, 'index']);  // Define resource routes for PostController

Route::resource('posts', PostController::class); // Equivalente a todas las rutas CRUD
//->only(['index','create','store','show','edit','update']); Unicando solo las rutas necesarias
//->except(['destroy']); // Excluyendo la ruta de eliminar
// Rutas de ejemplo para el controlador de posts

/*
Route::get('/posts', [PostController::class, 'index'])
->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])
->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])
->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])
->name('posts.destroy');
*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

/*
Route::get('/suma', function () {
    return view('suma');
});
*/

Route::get('/suma', [SumaController::class, 'index']);
Route::post('/suma', [SumaController::class, 'suma']);

Route::get('/productos', [ProductoController::class, 'index']);

/*
Route::get('/posts/{post}', function ($post) {
    return "Mostrando el post con ID: " . $post;
});
*/

Route::get('/prueba', function () {

$post = Post::find(1);
return $post->is_active;

    /* Crear Nuevo Post

    $post = new Post;

    $post->title = 'Mi Primer POST 4';
    $post->content = 'Contenido del primer post 4';
    $post->categoria = 'Categoria 4';

    $post->save();
    return $post;
    */

/*   $post = Post::find(1); */


/*
    Actulizar Registro Post
    $post = Post::where('title', 'Mi primer post 1')->first();

    $post->categoria = 'Desarrollo Web';
    $post->save();

    return $post;
*/
/*
    Traer todos los posts
    $posts = Post::all();
    return $posts;

    Donde categoria = Desarrollo Web
    $posts = Post::where('categoria', 'Desarrollo Web')->get();
    return $posts;

    Ordenar los posts por categoria ascendente
    $posts = Post::orderBy('categoria', 'asc')->get();
    return $posts;

    Seleccionar solo id, title y categoria
    $posts = Post::orderBy('categoria', 'asc')
    ->select('id', 'title', 'categoria')
    ->get();
    return $posts;

    Limitar la cantidad de registros
    $posts = Post::orderBy('categoria', 'asc')
    ->select('id', 'title', 'categoria')
    ->take(1)
    ->get();
    return $posts;

    Eliminar un post
    $posts = Post::find(1);
    $posts->delete();
    return "El post con ID 1 ha sido eliminado";
*/



});
