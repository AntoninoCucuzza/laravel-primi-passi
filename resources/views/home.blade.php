<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-primi-passi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>

    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/about') }}">about us </a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Hello World {{$name}} {{$lastname}}</h1>
</body>

</html>