@extends('templates.app-layout')
@section('content')
    <h1>Détails de l'étape</h1>
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
    <div>
        <strong>Début:</strong>
        <p>{{ $etape->debut->format('d/m/Y') }}</p>
    </div>
    <div>
        <strong>Fin:</strong>
        <p>{{ $etape->fin->format('d/m/Y') }}</p>
    </div>
    <div>
        <strong>Médias:</strong>
        <div>
            @foreach($etape->medias as $media)
                @if($media->format == 'image')
                    <img src="{{ $media->url }}" alt="{{ $media->titre }}" style="max-width: 200px;">
                @elseif($media->format == 'video')
                    <video controls style="max-width: 200px;">
                        <source src="{{ $media->url }}" type="video/{{ pathinfo($media->url, PATHINFO_EXTENSION) }}">
                        Your browser does not support the video tag.
                    </video>
                @endif
            @endforeach
        </div>
    </div>
    <div>
        <a href="{{ route('etapes.edit', $etape->id) }}">Modifier</a>
        <form action="{{ route('etapes.destroy', $etape->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </div>
@endsection
