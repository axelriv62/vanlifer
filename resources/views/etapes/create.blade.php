@extends('templates.app-layout')
@section('content')
    <h1>Création d'une étape</h1>
    <form action="{{ route('etapes.store', ['voyage_id' => $voyage_id]) }}" method="POST" enctype="multipart/form-data">
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
            <label for="medias">Médias:</label>
            <input type="file" id="medias" name="medias[]" multiple>
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection
