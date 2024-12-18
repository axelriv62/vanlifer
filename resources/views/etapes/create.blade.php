<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Créer une nouvelle étape</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.menu')
<main>
    <h1>Créer une nouvelle étape</h1>
    <form action="{{ route('etapes.store') }}" method="POST">
        @csrf
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" required>
        </div>
        <div>
            <label for="resume">Résumé:</label>
            <textarea id="resume" name="resume" required></textarea>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="debut">Début:</label>
            <input type="date" id="debut" name="debut" required>
        </div>
        <div>
            <label for="fin">Fin:</label>
            <input type="date" id="fin" name="fin" required>
        </div>
        <div>
            <label for="voyage_id">Voyage ID:</label>
            <input type="number" id="voyage_id" name="voyage_id" required>
        </div>
        <button type="submit">Créer</button>
    </form>
</main>
</body>
</html>
