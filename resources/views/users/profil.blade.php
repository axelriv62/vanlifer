@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/voyage.css'])
@endsection

@section('content')
    <div class="app-info">
        <h1>Mon profil</h1>
        <div>
            <p>Mon nom: {{ $user->name }}</p>
            <p>Mon email: {{ $user->email }}</p>
        </div>
    </div>
@endsection
