<x-app-layout>
    <a href="/posts">Volver a Posts</a>
    <br>
    <h1>Editar Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ old('title',$post->title) }}">
        </div>
        <div>
            <label for="slug">Slug:</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug',$post->slug) }}">
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="{{ old('categoria',$post->categoria) }}">
        </div>
        <div>
            <label for="content">Contenido:</label>
            <input type="text" id="content" name="content" value="{{ old('content',$post->content) }}">
        </div>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>
