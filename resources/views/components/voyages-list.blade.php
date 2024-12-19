<div class="voyages-list">
    @if ($voyages === null || $voyages->isEmpty())
        <p>Aucun voyage</p>
    @else
        @foreach($voyages as $voyage)
            <div class="voyage-item">
                <a href="{{ route('voyages.show', ['voyage' => $voyage->id]) }}">
                    <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
                    <h3>{{ $voyage->titre }}</h3>
                    @if (auth()->check() && auth()->user()->can('update', $voyage) && auth()->user()->can('delete', $voyage))
                        <a href="{{ route('voyages.edit', $voyage->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('voyages.destroy', $voyage->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    @endif

                </a>
            </div>
            @if(!$voyage->en_ligne && $voyage->user_id == auth()->id())
                <form action="{{ route('voyages.publish', $voyage->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Publier</button>
                </form>
            @endif
        @endforeach
    @endif
</div>
