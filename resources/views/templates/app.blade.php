<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{isset($title) ? $title : "Page en cours"}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

    @vite(["resources/css/normalize.css", 'resources/css/app.css', 'resources/js/app.js'])
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
