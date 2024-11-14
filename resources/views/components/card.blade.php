<div class="card" style="width: 18rem;">
    <img src="{{$img ?? $movie['img']}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$movie['title']}}</h5>
        <p class="card-text">{{$movie['released_at']}}</p>
        <p class="card-text">{{$movie['description']}}</p>
        <a href=""{{route('movies.show',['id' => $movie['id']])}}" class="btn btn-dark">Dettaglio del film</a>
    </div>
</div>