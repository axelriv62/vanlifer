<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Détails de l'étape</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.menu')
<h1>Détails du voyage</h1>
<main>
    <div>
        <strong>Titre:</strong>
        <p>{{ $voyage->titre }}</p>
    </div>
    <div>
        <strong>Résumé:</strong>
        <p>{{ $voyage->resume }}</p>
    </div>
    <div>
        <strong>Description:</strong>
        <p>{{ $voyage->description }}</p>
    </div>
    <div>
        <strong>En ligne:</strong>
        <p>{{ $voyage->en_ligne ? 'Oui' : 'Non' }}</p>
    </div>
    <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
</main>
</body>
</html>
