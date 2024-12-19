    <div class="add_commentaire">
        <h1>Donnez nous votre avis</h1>
        <form action="{{ route('avis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="contenu" id="contenu" class="form-control" required>
            </div>
            <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

