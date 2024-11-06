<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex justify-content-center">
                <h1>{{ $anime['title'] }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ $anime['images']['webp']['large_image_url'] }}" alt="img di {{ $anime['title'] }}"
                    class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <h3>info</h3>
                <p>{{ $anime['synopsis'] }}</p>
                <h3>Generi</h3>
                <ul>
                    @foreach ($anime['genres'] as $genre)
                        <li>
                            {{ $genre['name'] }}
                        </li>
                    @endforeach
                    <p>Numerio di espisodi: {{ $anime['episodes'] }}</p>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
