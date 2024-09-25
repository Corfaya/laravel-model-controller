@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gy-4">
            @foreach ($movies as $movie)               
           
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card w-100" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{$movie->title}}</h4>
                      <h5 class="card-title">Originale: {{$movie->original_title}}</h5>
                      <p class="card-text">Voto: {{$movie->vote}}/10</p>
                      <p class="card-text">Data di uscita: {{$movie->date}}/10</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection