<x-app-layout>
    <h1>Crear un nuevo post</h1>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif --}}
    <form action="{{ route ('posts.store') }}" method="POST">

        @csrf

        <div>
            <label for="title" >Título:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>

        @enderror
        <div>
            <label for="title" >Slug:</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}">
        </div>
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>

        @enderror
        <div>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="{{ old('categoria') }}">
        </div>
        @error('categoria')
            <div class="alert alert-danger">{{ $message }}</div>

        @enderror
        <div>
            <label for="content">Contenido:</label>
            <input type="text" id="content" name="content" value="{{ old('content') }}">
        </div>
        @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Crear Post</button>
    </form>
</body>
</html>
</x-app-layout>
