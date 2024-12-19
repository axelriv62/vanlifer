@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/voyage.css'])
@endsection

@section('content')
    <h1>Index des voyages</h1>
    @include('components.voyages-list', ['voyages' => $voyages])
@endsection
