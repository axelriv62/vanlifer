@extends('templates.app-layout')
@section('content')
    <h1>Modifier l'étape</h1>
    <form action="{{ route('etapes.update', $etape->id) }}" method="POST" enctype="multipart/form-data">
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
        <div>
            <label for="medias">Ajouter un/des médias:</label>
            <input type="file" id="medias" name="medias[]" multiple>
        </div>
        <div>
            <strong>Médias existants:</strong>
            <div>
                @foreach($etape->medias as $media)
                    <div>
                        @if($media->format == 'image')
                            <img src="{{ $media->url }}" alt="{{ $media->titre }}" style="max-width: 200px;">
                        @elseif($media->format == 'video')
                            <video controls style="max-width: 200px;">
                                <source src="{{ $media->url }}" type="video/{{ pathinfo($media->url, PATHINFO_EXTENSION) }}">
                                Votre navigateur ne supporte pas les vidéos.
                            </video>
                        @endif
                        <label>
                            <input type="checkbox" name="remove_medias[]" value="{{ $media->id }}">
                            Supprimer
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit">Modifier</button>
    </form>
@endsection
