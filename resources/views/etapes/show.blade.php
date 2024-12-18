@extends('templates.app-layout')
@section('content')
<h1>Détails de l'étape</h1>
 <div>
        <strong>Titre:</strong>
        <p>{{ $etape->titre }}</p>
    </div>
    <div>
        <strong>Résumé:</strong>
        <p>{{ $etape->resume }}</p>
    </div>
    <div>
        <strong>Description:</strong>
        <p>{{ $etape->description }}</p>
    </div>
    <div>
        <strong>Début:</strong>
        <p>{{ $etape->debut->format('d/m/Y') }}</p>
    </div>
    <div>
        <strong>Fin:</strong>
        <p>{{ $etape->fin->format('d/m/Y') }}</p>
    </div>
@endsection
