@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/voyages.css'])
@endsection

@section('content')
    <h2>Tous les voyages</h2>
    @include('components.voyages-list', ['voyages' => $voyages])
@endsection
