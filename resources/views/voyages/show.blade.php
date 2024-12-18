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
        @if($voyage->likes->contains(auth()->user()))
            <form action="{{ route('voyages.like', $voyage->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">Unlike</button>
            </form>
        @else
            <form action="{{ route('voyages.unlike', $voyage->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn">Like</button>
            </form>
        @endif
    </div>
@endsection
