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
    <div class="like">
    @auth
        @if($voyage->likes->contains(auth()->user()))
            <form action="{{ route('voyages.unlike', $voyage->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <label for="dislike"><i class='bx bxs-heart' style='color:#f28585'></i><p>Vous aimez ce voyage</p></label>
                <input type="submit" class="btn" id="dislike" style="display: none">
            </form>

        @else
            <form action="{{ route('voyages.like', $voyage->id) }}" method="POST">
                @csrf
                <label for="like"><i class='bx bx-heart' style='color:#f28585'></i></label>
                <input type="submit" class="btn" id="like" style="display: none">
            </form>
        @endif
        @endauth
    </div>
    <div class="stats">
        <p>Nombre de likes : {{ $voyage->likes->count() }}</p>
        <p>Nombre d'avis: {{ $voyage->avis->count() }}</p>
    </div>
    <div class="content">
        <section class="container etapes">
            @for ($i = 0; $i < min(4, $voyage->etapes->count()); $i++)
                @php
                    $etape = $voyage->etapes[$i];
                    $firstImage = $etape->medias->where('format', 'image')->first();
                    $colors = ['yellow', 'red', 'green'];
                    $randomColor = $colors[array_rand($colors)];
                @endphp
                <div class="etape" id="e{{ $i + 1 }}">
                    <p>{{ $etape->titre }}</p>
                    <div class="image {{ $randomColor }}">
                        <a href="{{ route('etapes.show', $etape) }}">
                            <img src="{{ $firstImage ? $firstImage->url : 'https://picsum.photos/id/237/200/300' }}" alt="{{ $etape->nom }}">
                        </a>
                    </div>
                </div>
            @endfor
        </section>
    </div>
    <div>
        @if (auth()->check() && auth()->user()->can('update', $voyage))
        <a href="{{ route('etapes.create', ['voyage_id' => $voyage->id]) }}" class="btn btn-primary yellow_btn">Créer une étape</a>
        @endif
    </div>
    <section class="commentaires">
        <h1>Commentaires</h1>
        @foreach($voyage->avis as $avis)
            <div class="avis">
                <p><strong>{{ $avis->user->name }}:</strong> <br/>{{ $avis->contenu }}</p>
            </div>
        @endforeach
        @auth
    @include('avis.create')
        @endauth
    </section>
@endsection
