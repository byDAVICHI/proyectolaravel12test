<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>Correo por Aprobar: Post Created</h1>
    <p>Se ha creado un nuevo post</p>
    <a href="{{ route('posts.show', $post) }}">Clcik para aprobar</a>
</body>
</html>