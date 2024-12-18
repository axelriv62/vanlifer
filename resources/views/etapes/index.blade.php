@extends('templates.app-layout')
@section('content')
<h1>Index des étapes</h1>
 <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Résumé</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($etapes as $etape)
            <tr>
                <td>{{ $etape->titre }}</td>
                <td>{{ $etape->resume }}</td>
                <td>{{ $etape->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
