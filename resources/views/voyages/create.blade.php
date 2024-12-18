@extends('templates.app-layout')
@section('content')
    <h1>Créer un nouveau voyage</h1>
    <form action="{{ route('voyages.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="visuel">Visuel:</label>
            <input type="file" id="visuel" name="visuel" required>
        </div>
        <button type="submit">Créer</button>
    </form>
@endsection
