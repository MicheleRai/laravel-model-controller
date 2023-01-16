<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>MOVIES</h1>
    @foreach ($movies as $movie)
        <div>Titolo: <b>{{$movie->title}}</b></div>
        <div>Nazionalita: <b>{{$movie->nationality}}</b></div>
        <div>Voto: <b>{{$movie->vote}}</b></div>
        <hr>
    @endforeach
</body>
</html>
