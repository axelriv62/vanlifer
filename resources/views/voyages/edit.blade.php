@extends('templates.app-layout')

@section('style')
    @vite(['resources/css/form.css'])
@endsection

@section('content')
    <section class="form">
        <div class="left">
        <h1>Modifier le voyage</h1>
        <form action="{{ route('voyages.update', $voyage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" value="{{ $voyage->titre }}" required>
            </div>
            <div>
                <label for="resume">Résumé:</label>
                <textarea id="resume" name="resume" required>{{ $voyage->resume }}</textarea>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required>{{ $voyage->description }}</textarea>
            </div>
            <div>
                <label for="visuel" class="label_img">Visuel: <img src="{{Vite::asset('resources/images/images.png')}}"></label>
                <input type="file" id="visuel" name="visuel" class="input_img" required style="display: none;">
                <label for="visuel" id="visuel-label" class="custom-file-label" style="display: inline-block; padding: 6px 12px; cursor: pointer; background-color: #86A69D; color: white; border-radius: 4px;">Importer des fichiers</label>
            </div>
            <button type="submit">Modifier</button>
        </form>
        </div>
        <div class="right">
            <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.3.0/dist/dotlottie-wc.js" type="module"></script>
            <dotlottie-wc src="https://lottie.host/19de8a83-4388-4a41-9d4b-ed147d731e8c/EN9tbVq2R3.lottie" autoplay loop></dotlottie-wc>
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
