@extends('layouts.app')

@section('title', 'Guest Index')

@section('main-content')
    <div class="container">
        <div class="comic-container mt-5">
            @foreach ($comicList as $comic)
            <article class="col-2">
                <div>
                    <img src="{{ $comic['thumb'] }}" alt="$comic['title']'s Poster">
                </div>
                <div>
                    <p>{{ $comic['title'] }}</p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
@endsection