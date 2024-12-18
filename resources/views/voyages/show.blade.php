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
            <div class="etape" id="e1">
                <p>Rome</p>
                <div class="image red">
                <img src="https://picsum.photos/id/237/200/300">
                </div>
            </div>
            <div class="etape" id="e2">
                <p>Rome</p>
                <div class="image red">
                    <img src="https://picsum.photos/id/237/200/300">
                </div>
            </div>
            <div class="etape" id="e3">
                <p>Rome</p>
                <div class="image yellow">
                    <img src="https://picsum.photos/id/237/200/300">
                </div>
            </div>
            <div class="etape" id="e4">
                <p>Rome</p>
                <div class="image green">
                    <img src="https://picsum.photos/id/237/200/300">
                </div>
            </div>
        </section>
    </div>

@endsection
