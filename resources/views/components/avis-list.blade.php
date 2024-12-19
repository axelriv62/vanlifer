<div class="avis-list">
    @if ($all_avis === null || $all_avis->isEmpty())
        <p>Aucun avis</p>
    @else
        @foreach($all_avis as $avis)
            <div class="avis-item">
                <p>Commentaire: {{ $avis->contenu }}</p>
                <p><a href="{{ route('voyages.show', ['voyage' => $avis->voyage->id]) }}">Voyage: {{ $avis->voyage->titre }}</a></p>
            </div>
        @endforeach
    @endif
</div>
