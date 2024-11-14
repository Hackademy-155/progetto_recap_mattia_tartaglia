<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Lista</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-12 col-md-3 my-3">
                <x-card
                :img="$movie['img']"
                :movie="$movie"
                :title="$movie['title']"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>