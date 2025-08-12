<x-mail::message>
    <h1> Por Aprobar: Post Created </h1>
    <x-mail::panel>
     Se ha creado un nuevo post 
    </x-mail::panel>
    <x-mail::button :url="route('posts.show', $post)" color="success">
        Ver Post
    </x-mail::button>
    
</x-mail::message>
{{--<p></p> --}}
{{-- <p>Hola, se ha creado un nuevo post: {{ $post->title }}</p> --}}
{{-- <p>Para aprobarlo, haz clic en el siguiente enlace:</p> --}}
{{-- <p><a href="{{ route('posts.show', $post) }}">Ver Post</a></p> --}}
{{-- <p>Gracias por tu atención.</p> --}}
{{-- <p>Saludos,</p> --}}
{{-- <p>El equipo de Laravel</p> --}}
{{-- <p>Para aprobar el post, haz clic en el siguiente enlace:</p> --}}
{{-- <p><a href="{{ route('posts.show', $post) }}">Aprobar Post</a></p> --}}
{{-- <p>Gracias por tu atención.</p> --}}
{{-- <p>Saludos,</p> --}}
{{-- <p>El equipo de Laravel</p> --}}
{{-- <a href="{{ route('posts.show', $post) }}">Clcik para aprobar</a> --}}