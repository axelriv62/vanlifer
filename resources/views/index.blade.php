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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Curabitur eget risus eu urna suscipit ultrices. Maecenas ante nunc, aliquet eget sagittis vitae, egestas nec diam.
                Cras vel ipsum aliquam, imperdiet ante id, finibus sapien. Suspendisse vel urna a erat fringilla imperdiet quis eget quam.
                Maecenas sit amet sapien mauris. Suspendisse semper mollis tellus, sed lobortis tortor. Curabitur sit amet condimentum risus. </p>
        </div>
        <div class="right">
            <img src="https://baconmockup.com/300/300/" alt="Nous">
        </div>
    </section>
    <section class="trait">
        <h1>Nos Vans Tours</h1>
    </section>
    <section class="voyages">
        <div class="image">
            <img src="https://picsum.photos/seed/picsum/300/300" alt="">
            <div class="text">
                <p>Voyage en Italie</p>
            </div>
        </div>
        <div class="image">
            <img src="https://picsum.photos/300/300?grayscale" alt="">
            <div class="text">
                <p>Voyage en Italie</p>
            </div>
        </div>
        <div class="image">
            <img src="https://picsum.photos/300/300/" alt="">
            <div class="text">
                <p>Voyage en Italie</p>
            </div>
        </div>
    </section>



@endsection

