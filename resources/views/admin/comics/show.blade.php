@extends('layouts.app')

@section('title', 'Admin Show')

@section('main-content')
<div class="container">
    <div class="row justify-content-around">
        <article class="card col-12 p-0 m-3">
            <img src="{{ $comic->thumb }}" class="card-img-top w-25" alt="...">
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
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    {{ $comic->type  }}
                </li>
                <li class="list-group-item">
                    {{ $comic->description  }}
                </li>
            </ul>
        </article>
    </div>
</div>

@endsection