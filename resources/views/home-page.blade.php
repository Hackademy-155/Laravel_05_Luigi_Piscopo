<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>ANIME JIKAN</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($animes as $anime)
                <div class="col-12 col-md-3 my-3 d-flex justify-content-center ">
                    <x-card :anime="$anime" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
