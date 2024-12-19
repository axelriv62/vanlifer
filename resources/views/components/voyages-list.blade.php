<div class="voyages-list">
    @if ($voyages === null || $voyages->isEmpty())
        <p>Aucun voyage</p>
    @else
        @foreach($voyages as $voyage)
            <div class="voyage-item">
                <img src="{{ $voyage->visuel }}" alt="{{ $voyage->titre }}">
                <h3>{{ $voyage->titre }}</h3>
            </div>
        @endforeach
    @endif
</div>
