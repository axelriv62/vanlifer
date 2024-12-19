@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/index.css'])
@endsection
@section('content')
    <section class="banner">
        <div class="content">
            <img src="{{Vite::asset('resources/images/vanlife.webp')}}" alt="bannière">
            <div class="text">
                <h1>Bienvenue sur VanLifer !</h1>
                <p>L'aventure commence ici</p>
            </div>
        </div>
    </section>
    <section class="presentation">
        <div class="left">
            <h1>Qui sommes-nous ?</h1>
            <div class="anim">
                <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.3.0/dist/dotlottie-wc.js" type="module"></script>
                <dotlottie-wc src="https://lottie.host/9b29c8cd-d762-499b-bff3-f3d6c146cce8/L8qJlEDkT1.lottie" autoplay loop></dotlottie-wc>
            </div>
            <p>Nous sommes Anaëlle Delahaye, Lynoa Queva, Tessia Devin--Lemoine, Quentin Tripognez, Axel Rivière, Bylel Bourhim. Un groupe d'ami fan de la VanLife. Nous avons décidé de créer l'application Vanlifer pour permettre à tous les fans comme nous de partager leurs aventures </p>
        </div>
        <div class="right">
            <img src="{{Vite::asset('resources/images/team.jpg')}}" alt="Nous">
        </div>
    </section>
    <section class="trait">
        <h1>Nos Vans Tours</h1>
    </section>
    <section class="voyages">
        @foreach($voyages as $voyage)
            <a href="{{ route('voyages.show', $voyage) }}">
                <div class="image">
                    <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
                    <div class="text">
                        <p>{{ $voyage->titre }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </section>
@endsection

