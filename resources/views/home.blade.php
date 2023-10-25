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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            color: white;
            background-color: #111;
        }

        nav {
            align-items: center;
            display: flex;
        }

        a {
            font-size: 20px;
            color: white;
            text-decoration: none;
        }

        header {
            background-color: #444;
        }

        ul {
            display: flex;
            gap: 1rem;
            list-style: none;
        }

        li:first-child {
            margin-left: 1rem;
        }

        .p {
            padding: 3rem 1rem;
        }

        li {
            padding: 1rem;
            transition: 0.3s;
        }

        li:hover {
            background-color: #666;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h1>Logo Brutto</h1>
            <ul>
                <li>
                    <a href="{{ url('/about') }}">about us </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=odxW4LtK0gc">menu 2</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">menu 3</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1 class="p">Hello World {{$name}} {{$lastname}}</h1>
</body>

</html>