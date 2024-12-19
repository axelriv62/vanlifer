@extends('templates.app-layout')

@section('content')
    <h1>Users with Active Voyages</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
