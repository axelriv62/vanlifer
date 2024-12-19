@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/form.css'])
@endsection

@section('content')
    <section class="form">
        <div class="left">
        <h1>Création d'une étape</h1>
        <form action="{{ route('etapes.store', ['voyage_id' => $voyage_id]) }}" method="POST" enctype="multipart/form-data">
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
                <label for="debut">Début:</label>
                <input type="date" id="debut" name="debut" required>
            </div>
            <div>
                <label for="fin">Fin:</label>
                <input type="date" id="fin" name="fin" required>
            </div>
            <div>
                <label for="visuel" class="label_img">Visuel: <img src="{{Vite::asset('resources/images/images.png')}}"></label>
                <input type="file" id="visuel" name="medias[]" class="input_img" required style="display: none;">
                <label for="visuel" id="visuel-label" class="custom-file-label" style="display: inline-block; padding: 6px 12px; cursor: pointer; background-color: #86A69D; color: white; border-radius: 4px;">Importer des fichiers</label>
            </div>
            <button type="submit">Ajouter</button>
        </form>
        </div>
        <div class="right">
            <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.3.0/dist/dotlottie-wc.js" type="module"></script>
            <dotlottie-wc src="https://lottie.host/936751f1-360d-435b-a802-ea51377edc0f/trnf6VdL7O.lottie" autoplay loop></dotlottie-wc>
        </div>
    </section>
    <script>
        const input_img = document.querySelector('.input_img');
        function preview(event) {
            let file = event;
            const label = document.querySelector('.label_img img');
            let fr = new FileReader();

            fr.addEventListener('load', () => {
                label.src = fr.result;
            })
            if (file) {
                fr.readAsDataURL(file);
            }
        }
        input_img.addEventListener('change', (e) => {
            preview(e.target.files[0]);
        })
    </script>
@endsection
