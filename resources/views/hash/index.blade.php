<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cash Luna tu papa</title>
        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exist(public_path('hot')))
            @vite(['resources/css/app.css','resources/js/app.js'])
        @else

        @endif
    </head>

    <body>
        <h1>Hola</h1>
        <p>eres gei</p>
        <p>{{ $mensaje }}</p>
        <form action="/hash/upload" method="POST" enctype=multipart/form-data">
            @csrf
            <input type="file" name="file" required>
            <button type="submit">Calcular Hash</button>
        </form>
    </body>
</html>
