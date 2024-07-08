<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Movies</h1>

    <ul>
        @foreach($movies as $movie)
        <li>{{$movie['title']}}</li>
        @endforeach
    </ul>
</body>

</html>