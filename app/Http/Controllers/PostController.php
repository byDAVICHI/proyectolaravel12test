<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id', 'desc')->paginate(10); // Paginación de 15 registros por página
        //return $posts;
        return view('posts.index', compact('posts'));
    }

    public function create(){


        return view('posts.create');
    }

    public function store(Request $request){
        Post::create($request->all()); // Crea un nuevo post con los datos del request
        // Validación de los datos
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->categoria = $request->input('categoria');
        // $post->content = $request->input('content');
        // $post->save();
        // Todo esto se puede hacer con el método create
        return redirect()->route('posts.index');
    }

    public function show(Post $post){ // Route Model Binding sirve para evitar el Find
        // EJEMPLO:
        // compact('post'); // ['post' => $post]
        // Otra forma:
        // return view('posts.show', compact('post'));
        // return $post; // Retorna el post en formato JSON
        // $post = Post::find($post); // Find Busca el post por su ID

        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post){

        // $post = Post::find($post);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request,Post $post){
        $post->update($request->all()); // Actualiza el post con los datos del request
        // Validación de los datos
        // $post = Post::find($post);
        // $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->categoria = $request->input('categoria');
        // $post->content = $request->input('content');
        // $post->save();
        // Otra forma de actualizar el post
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post){

        //$post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
