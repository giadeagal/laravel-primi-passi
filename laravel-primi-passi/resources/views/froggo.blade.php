<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FROGGOS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
    <header>
        <ul>
            <li><a href="{{route("to-catto")}}">catto</a></li>
            <li><a href="{{route("land-here")}}">doggo</a></li>
            <li><a href="{{route("to-birbo")}}">birbo</a></li>
        </ul>
       </header>

       <h1>{{ $hi }}</h1>
       <img src="{{ $src }}" alt="{{$alt}}" title="{{$title}}">

    </body>
</html>
