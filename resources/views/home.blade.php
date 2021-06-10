<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }} - {{ $movie->original_title }} - {{ $movie->nationality }} - {{ $movie->date }} - {{ $movie->vote }}</li>
        @endforeach
    </ul>
</body>
</html>