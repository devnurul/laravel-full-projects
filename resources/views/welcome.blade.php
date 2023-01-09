<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <h2>Hello Laravel I am Nurul Islam</h2>
       <ul>
        <li><a href="">About</a></li>
        <li><a target="_blank" href="{{ url("blogList") }}">Blog</a></li>
        <li><a href="">contact</a></li>
       </ul>
    </body>
</html>
