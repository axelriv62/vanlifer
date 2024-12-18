<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Index des étapes</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.menu')
<h1>Voyages</h1>
<main>
    @foreach ($voyages as $voyage)
        <article>
            <h2>{{ $voyage->titre }}</h2>
            <p>Résumé: {{ $voyage->resume }}</p>
            <p>Description: {{ $voyage->description }}</p>
            <p>Continent: {{ $voyage->continent }}</p>
            <p>En ligne: {{ $voyage->en_ligne ? 'Oui' : 'Non' }}</p>
            <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
            <a href="{{ route('voyages.show', $voyage) }}">Détails</a>
        </article>
    @endforeach
</main>
</body>
</html>
