<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{isset($title) ? $title : "Page en cours"}}</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />


    <!-- par défaut on charge ces css/js -->
    <!-- on peut étendre cette section, voir la vue test-vite.blade.php -->
    @section("head")
        @vite(["resources/css/normalize.css", 'resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
<header>Ma super application</header>
<nav>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('test-vite')}}">Test Vite</a>
    <a href="#">Contact</a>

@auth
        {{Auth::user()->name}}
        <a href="{{route("logout")}}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form>
    @else
        <a href="{{route("login")}}">Login</a>
        <a href="{{route("register")}}">Register</a>
    @endauth
</nav>

<main>
    @yield("content")
</main>

<footer>IUT de Lens</footer>
</body>
</html>
