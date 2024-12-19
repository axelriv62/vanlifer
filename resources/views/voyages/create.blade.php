@extends('templates.app-layout')
@section('content')
    <h1>Création d'un voyage</h1>
    <form action="{{ route('voyages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" required>
        </div>
        <div>
            <label for="resume">Résumé:</label>
            <textarea id="resume" name="resume" required></textarea>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="visuel">Visuel:</label>
            <input type="file" id="visuel" name="visuel" required style="display: none;">
            <label for="visuel" id="visuel-label" class="custom-file-label" style="display: inline-block; padding: 6px 12px; cursor: pointer; background-color: #86A69D; color: white; border-radius: 4px;">Importer des fichiers</label>
        </div>

        @section('script')
            <script>
                document.getElementById('visuel').addEventListener('change', function() {
                    var fileName = this.files[0].name;
                    document.getElementById('visuel-label').textContent = fileName;
                });
            </script>
        @endsection
        <button type="submit" style="display: inline-block; padding: 6px 12px; cursor: pointer; background-color: #86A69D; color: white; border-radius: 4px; border: none;">Ajouter</button>
    </form>
@endsection
