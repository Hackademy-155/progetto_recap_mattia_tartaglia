<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">{{$movie['title']}}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{$movie['img']}}" alt="Copertina del film {{$movie['title']}}" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <p>{{$movie['description']}}</p>
                <p>Diretto da: {{$movie['director']}}</p>
                <p>Genere del film: {{$movie['genre']}}</p>
                <p>Rilasciato il: {{$movie['released_at']}}</p>
            </div>
        </div>
        <a href="{{route('movies.index')}}" class="text-dark mt-5">Torna alla lista dei film</a>
    </div>
</x-layout>