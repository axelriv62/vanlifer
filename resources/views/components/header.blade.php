<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanPy</title>
    @vite('resources/css/app.css')
</head>
<body>
<header>
    <div class="logo">
        <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo"><!-- Logo -->
    </div>
    <nav>
        <ul>
            <li><a href="/voyage">Voyage</a></li>
            <li><a href="/voyage/create">Créer un voyage</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li><a href="/register">Connexion</a></li>
            <li><a href="/login">Créer un compte</a></li>
            <div class="logo">
                <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo"><!-- Icône de connexion de l'utilisateur -->
            </div>
        </ul>
    </nav>
</header>
</body>
</html>
