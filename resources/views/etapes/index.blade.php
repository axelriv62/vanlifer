<!-- resources/views/etapes/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Étapes du voyage</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<h1>Étapes du voyage</h1>
<main>

    @foreach($etapes as $etape)
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
        <hr>
    @endforeach
</main>
</body>
</html>
