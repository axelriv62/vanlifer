@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/etape.css'])
@endsection

@section('content')
    <section class="banner">
            @foreach($etape->medias as $media)
                @if($media->format == 'image')
                    <img src="{{ $media->url }}" alt="{{ $media->titre }}">
                @endif
            @endforeach
            <div class="titre">
                <p>{{ $etape->titre }}</p>
            </div>
        </section>
        <section class="background">
            <div class="content">
                <div class="description">
                    <p>{{ $etape->description }}</p>
                    <div class="navigation-buttons">
                        <div class="left">
                            @if($previousEtape)
                                <a href="{{ route('etapes.show', ['voyage' => $etape->voyage_id, 'etape' => $previousEtape->id]) }}" class="btn btn-primary"><i class='bx bx-left-arrow-alt' style='color:#86a69d'  ></i></a>
                            @endif
                        </div>
                        <div class="right">
                            @if($nextEtape)
                                <a href="{{ route('etapes.show', ['voyage' => $etape->voyage_id, 'etape' => $nextEtape->id]) }}" class="btn btn-primary"><i class='bx bx-right-arrow-alt' style='color:#86a69d' ></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="date">
                    <div>
                        <strong>Début:</strong>
                        <p>{{ $etape->debut->format('d/m/Y') }}</p>
                    </div>
                    <div>
                        <strong>Fin:</strong>
                        <p>{{ $etape->fin->format('d/m/Y') }}</p>
                    </div>
                </div>
                <div class="image">
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
                <div class="btn">
                    @if (auth()->check() && auth()->user()->id === $etape->voyage->user_id)
                        <a href="{{ route('etapes.edit', $etape->id) }}" class="yellow_btn">Modifier</a>

                        <form action="{{ route('etapes.destroy', $etape->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="green_btn">Supprimer</button>
                        </form>
                    @endif
                </div>
            </div>
    </section>
@endsection
