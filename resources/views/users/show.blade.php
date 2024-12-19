@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/voyage.css'])
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
        @if ($user->mesVoyages && $user->mesVoyages->isEmpty())
            <p>Cet utilisateur n'a pas encore documenté de voyages.</p>
        @else
            <x-voyages-list :voyages="$user->mesVoyages" />
        @endif
    </div>
@endsection
