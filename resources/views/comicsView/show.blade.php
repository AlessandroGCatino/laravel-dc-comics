@extends('layouts.basic')

@section('title', 'DC Comics | Show')

@section('content')
    <div class="container">
        <h2 class="mb-3">{{ $comic->title }}</h2>

        <p class="mb-5">
            {{ $comic->description }}
        </p>

        <figure class="w-25 float-start me-3">
            <img src="<?= $comic->thumb ?>" alt="">
        </figure>

        <h5>Price: ${{$comic->price}}</h5>

        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p class="text-capitalize">{{$comic->type}}</p>

        <a href="{{route("comics.edit", $comic)}}">
            <button class="btn btn-primary">
                Modifica
            </button>
        </a>


    </div>
@endsection