<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VanLife - Index des étapes</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<h1>Index des étapes</h1>
<main>
    <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Résumé</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($etapes as $etape)
            <tr>
                <td>{{ $etape->titre }}</td>
                <td>{{ $etape->resume }}</td>
                <td>{{ $etape->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
</body>
</html>
