<div class="voyages-list">
    @if ($voyages === null || $voyages->isEmpty())
        <p>Aucun voyage</p>
    @else
        @foreach($voyages as $voyage)
            <div class="voyage-item">
                <a href="{{ route('voyages.show', ['voyage' => $voyage->id]) }}">
                    <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
                    <h3>{{ $voyage->titre }}</h3>
                </a>
            </div>
        @endforeach
    @endif
</div>
