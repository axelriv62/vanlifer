@extends('templates.app-layout')
@section('content')
    <h1>Modifier le voyage</h1>
    <form action="{{ route('voyages.update', $voyage->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" value="{{ $voyage->titre }}" required>
        </div>
        <div>
            <label for="resume">Résumé:</label>
            <textarea id="resume" name="resume" required>{{ $voyage->resume }}</textarea>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $voyage->description }}</textarea>
        </div>
        <div>
            <label for="visuel">Visuel:</label>
            <input type="file" id="visuel" name="visuel">
        </div>
        <button type="submit">Modifier</button>
    </form>
@endsection
