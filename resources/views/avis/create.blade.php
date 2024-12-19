    <div class="container">
        <h1>Create New Avis</h1>
        <form action="{{ route('avis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu" class="form-control" required></textarea>
            </div>
            <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

