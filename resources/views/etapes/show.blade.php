<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Détails de l'étape</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<h1>Détails de l'étape</h1>
<main>
    <div>
        <strong>Titre:</strong>
        <p>{{ $etape->titre }}</p>
    </div>
    <div>
        <strong>Résumé:</strong>
        <p>{{ $etape->resume }}</p>
    </div>
    <div>
        <strong>Description:</strong>
        <p>{{ $etape->description }}</p>
    </div>
    <div>
        <strong>Début:</strong>
        <p>{{ $etape->debut->format('d/m/Y') }}</p>
    </div>
    <div>
        <strong>Fin:</strong>
        <p>{{ $etape->fin->format('d/m/Y') }}</p>
    </div>

</main>
</body>
</html>
