@extends('layouts.app')

@section('title', 'Guest Index')

@section('main-content')
    <div class="container">
        <div class="comic-container mt-5">
            @foreach ($comicList as $comic)
            <article class="col-2 self-align-top">
                <div>
                    <img src="{{ $comic['thumb'] }}" alt="$comic['title']'s Poster">
                </div>
                <div>
                    <p>{{ Str::limit($comic['title'], 20) }}</p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
@endsection