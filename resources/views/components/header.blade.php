<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife</title>
    @vite('resources/css/app.css')
</head>
<body>
<header>
    <div class="logo">
        <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="/">Voyage</a></li>
            <li><a href="/about">Créer un voyage</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li><a href="/services">Connexion</a></li>
            <li><a href="/contact">Inscription</a></li>
            <div class="logo">
                <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
            </div>
        </ul>
    </nav>
</header>
</body>
</html>
