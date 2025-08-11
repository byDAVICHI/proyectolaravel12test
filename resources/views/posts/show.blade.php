<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 11 | Show</title>
</head>
<body>
    {{-- <h1>Detalles del Post </h1>
       true se visualiza como un comentario en Blade
            false se oculta el contenido                    --}}
    @if (true)
        <a href="{{ route ('posts.index') }}">Volver a Posts</a>
        <br>
        <h1>Contenido del post: {{ $post->title }}</h1>
        <p>
            <b>Categoria: </b> {{ $post->categoria }}
        </p>
        <p>
            <b>Contenido: </b> {{ $post->content }}
        </p>
        <a href="{{ route('posts.edit', $post) }}">Editar</a>

        <form action="{{ route ('posts.destroy', $post) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar Post</button>
        </form>
    @endif
</body>
</html>
