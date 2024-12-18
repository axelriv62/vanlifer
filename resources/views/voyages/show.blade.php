@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/voyage.css'])
@endsection

@section('content')
    <section class="banner">
        <p>{{$voyage->titre}}</p>
        <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
    </section>
    <section class="description">
        <img src="{{asset('storage/images/plaque.png')}}">
        <div>
            <h2><strong>Description:</strong></h2>
            <p>{{ $voyage->description }}</p>
        </div>
    </section>
    <div class="content">
        <section class="container etapes">
            @for ($i = 0; $i < min(4, $voyage->etapes->count()); $i++)
                @php
                    $etape = $voyage->etapes[$i];
                    $defaultImages = glob(public_path('storage/app/public/images/user1/*.{jpg,png,gif}'), GLOB_BRACE);
                    $randomImage = !empty($defaultImages) ? asset('storage/app/public/images/user1/' . basename($defaultImages[array_rand($defaultImages)])) : asset('storage/images/default.jpg');
                @endphp
                <div class="etape" id="e{{ $i + 1 }}">
                    <p>{{ $etape->nom }}</p>
                    <div class="image {{ $etape->couleur }}">
                        <a href="{{ route('etapes.show', $etape) }}">
                            <img src="{{ $etape->image_url ?? $randomImage }}" alt="{{ $etape->nom }}">
                        </a>
                    </div>
                </div>
            @endfor
        </section>
    </div>
@endsection
