<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- links -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body class="antialiased">
        <div class="login">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">{{ Auth::user()->name}}</a>
                        <a href="{{  route('logout') }}" class="register">Log-out</a>

                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        @auth
        <li class="nav-item">
            <a class="nav-link" href="insertarPeso">Añadir Peso</a>
         </li>
        @endauth
        
    </body>
</html>
