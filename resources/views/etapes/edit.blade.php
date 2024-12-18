<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Modifier l'étape</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<main>
    <h1>Modifier l'étape</h1>
    <form action="{{ route('etapes.update', $etape->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" value="{{ $etape->titre }}" required>
        </div>
        <div>
            <label for="resume">Résumé:</label>
            <textarea id="resume" name="resume" required>{{ $etape->resume }}</textarea>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $etape->description }}</textarea>
        </div>
        <div>
            <label for="debut">Début:</label>
            <input type="date" id="debut" name="debut" value="{{ $etape->debut->format('Y-m-d') }}" required>
        </div>
        <div>
            <label for="fin">Fin:</label>
            <input type="date" id="fin" name="fin" value="{{ $etape->fin->format('Y-m-d') }}" required>
        </div>
        <div>
            <label for="voyage_id">Voyage ID:</label>
            <input type="number" id="voyage_id" name="voyage_id" value="{{ $etape->voyage_id }}" required>
        </div>
        <button type="submit">Modifier</button>
    </form>
</main>
</body>
</html>
