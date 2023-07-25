@extends('layouts.app')

@section('title', 'Admin Show')

@section('main-content')
<div class="container">
    <div class="row justify-content-around">
        <article class="card col-12 p-0 m-3">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title  }}
                </h5>
                <h6>
                    ID : {{ $comic->id }}
                </h6>
                <p class="card-text">
                    This comic was released : {{ $comic->sale_date }}
                </p>
                <ul>
                    <li>
                        <span class="fw-bold">Comic Type: </span><span class="fw-light">{{ $comic->type }}</span>
                    </li>
                    <li>
                        <span class="fw-bold">Description: </span><span class="fw-light">{{ $comic->description }}</span>
                    </li>
                    <li>
                        <span class="fw-bold">Artists: </span><span class="fw-light">{{ $comic->artists }}</span>
                    </li>
                    <li>
                        <span class="fw-bold">Writers: </span><span class="fw-light">{{ $comic->writers }}</span>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</div>

@endsection