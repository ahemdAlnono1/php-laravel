<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Lesson1 @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{url('css/style.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative py-4 px-6">
            <nav>
                        <!-- this is route name -->
                <a href="{{route('home.index')}}">Home</a>
                <a href="{{route('home.about')}}">About</a>
                <a href="{{route('home.contact')}}">Contact</a>
                <a href="{{route('computers.index')}}">Computers</a>
                <a href="{{route('computers.create')}}">Create</a>
            </nav>
        </div>
            @yield('content')
    </body>
</html>
