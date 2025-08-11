<x-app-layout>
    <a href="/posts">Volver a Posts</a>
    <br>
    <h1>Editar Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="slug">Slug:</label>
            <input type="text" id="slug" name="slug" value="{{ $post->slug }}">
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="{{ $post->categoria }}">
        </div>
        <div>
            <label for="content">Contenido:</label>
            <input type="text" id="content" name="content" value="{{ $post->content }}">
        </div>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>
