<x-app-layout>
    <h1>Crear un nuevo post</h1>
    <form action="{{ route ('posts.store') }}" method="POST">

        @csrf

        <div>
            <label for="title" >Título:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="title" >Slug:</label>
            <input type="text" id="slug" name="slug" required>
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" required></input>
        </div>
        <div>
            <label for="content">Contenido:</label>
            <input type="text" id="content" name="content" required></input>
        </div>
        <button type="submit">Crear Post</button>
    </form>
</body>
</html>
</x-app-layout>
