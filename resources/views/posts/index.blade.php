<x-app-layout>
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}">Crear un nuevo post</a>
        <br><br>
        <h2>Lista de Posts</h2>
        <p>Estos son los posts que tenemos en la base de datos:</p>
        <p>Si no hay posts, puedes crear uno.</p>
        <br>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post )}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }} <!-- Paginación de los posts -->

</x-app-layout>
