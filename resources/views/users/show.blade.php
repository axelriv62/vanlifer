@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/users.css'])
@endsection

@section('content')

    <div class="app-info">
        <h1>Profil de l'utilisateur</h1>
        <div>
            <p>Nom: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>
    </div>

    <div class="app-info">
        <h2>Voyages</h2>
        <div class="grid">
            @if ($user->mesVoyages && $user->mesVoyages->isEmpty())
                <p>Cet utilisateur n'a pas encore documenté de voyages.</p>
            @else
                @include('components.voyages-list', ['voyages' => $user->mesVoyages])
            @endif
        </div>
    </div>

    <div class="app-info">
        <h2>Commentaires</h2>
        @if ($user->avis && $user->avis->isEmpty())
            <p>Cet utilisateur n'a pas encore laissé d'avis.</p>
        @else
            @include('components.avis-list', ['all_avis' => $user->avis])
        @endif

    </div>
@endsection
