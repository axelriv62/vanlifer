@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/form.css'])
@endsection

@section('content')
    <section class="form">
        <div class="left">
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
            <label for="visuel" class="label_img">Visuel: <img src="{{Vite::asset('resources/images/images.png')}}"></label>
            <input type="file" id="visuel" name="medias[]" class="input_img" required style="display: none;">
            <label for="visuel" id="visuel-label" class="custom-file-label" style="display: inline-block; padding: 6px 12px; cursor: pointer; background-color: #86A69D; color: white; border-radius: 4px;">Importer des fichiers</label>
        </div>
        <div>
            <strong>Médias existants:</strong>
            <div class="medias">
                @foreach($etape->medias as $media)
                    <div class="media">
                        @if($media->format == 'image')
                            <img src="{{ $media->url }}" alt="{{ $media->titre }}" style="max-width: 200px;">
                        @elseif($media->format == 'video')
                            <video controls style="max-width: 200px;">
                                <source src="{{ $media->url }}" type="video/{{ pathinfo($media->url, PATHINFO_EXTENSION) }}">
                                Votre navigateur ne supporte pas les vidéos.
                            </video>
                        @endif
                        <div class="delete">
                            <label>
                                <input type="checkbox" name="remove_medias[]" value="{{ $media->id }}">
                                Supprimer
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit">Modifier</button>
    </form>
        </div>
        <div class="right">
            <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.3.0/dist/dotlottie-wc.js" type="module"></script>
            <dotlottie-wc src="https://lottie.host/9b29c8cd-d762-499b-bff3-f3d6c146cce8/L8qJlEDkT1.lottie" autoplay loop></dotlottie-wc>
        </div>
    </section>
@endsection
