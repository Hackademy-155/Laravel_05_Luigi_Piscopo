<a class="text-decoration-none " href="{{ route('show', ['id' => $anime['mal_id']]) }}">
    <div class="card" style="width: 17rem;">
        <img src="{{ $anime['images']['webp']['image_url'] }}" class="card-img-top" alt="...">
        <h2 class="card-title">{{ $anime['title'] }}</h2>
        <div class="card-body">
            <p class="card-text">Anno di uscita: {{ $anime['year'] ?? 'Non è definito' }}</p>
        </div>
    </div>
</a>

