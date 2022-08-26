<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Home</title>
</head>
<body>
    <main>
        <h1>Lista dei migliori film</h1>
        <div class="container flex">
            @foreach ($movies as $movie)
            <div class="card">
                <div class="card-title"><h2>{{ $movie -> title}}</h2></div>
                <div class="card-subtitle"><h3>{{ $movie -> original_title}}</h3></div>
                <div class="lang">Lang: {{ $movie -> nationality}}</div>
                <div class="date">Release Date: {{ $movie -> date}}</div>
                <div class="vote">Vote: {{ $movie -> vote}}</div>
            </div>          
            @endforeach
        </div>
    </main>
</body>
</html>
