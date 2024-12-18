<!-- resources/views/etapes/destroy.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Supprimer l'étape</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<main>
    <h1>Supprimer l'étape</h1>
    <form action="{{ route('etapes.destroy', 'id') }}" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <label for="etape_id">ID de l'étape:</label>
            <input type="number" id="etape_id" name="etape_id" required>
        </div>
        <button type="submit">Supprimer</button>
    </form>
</main>
</body>
</html>
