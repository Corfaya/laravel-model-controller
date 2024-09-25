@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gy-4">
            @foreach ($movies as $movie)               
           
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card w-100 border-0 rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title border border-top-0 border-end-0 border-start-0 pb-2 fw-bold">{{$movie->title}}</h4>
                      <h5 class="card-title">Originale: {{$movie->original_title}}</h5>
                      <p class="card-text">Voto: <span class="fw-bolder">{{$movie->vote}}</span>/10</p>
                      @if ($movie->nationality == 'american')
                      <div class="flag-box"><img src="{{Vite::asset('resources/img/united-states.png')}}" alt="USA"></div>
                      @else
                        <div class="flag-box"><img src="{{Vite::asset('resources/img/united-kingdom.png')}}" alt="UK"></div>
                      @endif
                      <p class="card-text">Data di uscita: {{$movie->date}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection