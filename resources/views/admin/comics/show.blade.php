@extends('layouts.app')

@section('title', 'Admin Show')

@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
<div class="container">
    <div class="row justify-content-around">
        <article class="card w-50 p-0 m-2 position-relative">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title  }}
                </h5>
                <img src="{{ $comic->thumb }}" class="card-img-top w-75 align-self-center">
                <h6>
                    ID : {{ $comic->id }}
                </h6>
                <p class="card-text">
                    Release date: {{ $comic->sale_date }}
                </p>
                <p>
                    <span class="fw-bold">Comic Type: </span><span class="fw-light">{{ $comic->type }}</span>
                </p>
                <p>
                    <span class="fw-bold">Description: </span><span class="fw-light">{{ $comic->description }}</span>
                </p>
                <p>
                    <span class="fw-bold">Artists: </span><span class="fw-light">{{ $comic->artists }}</span>
                </p>
                <p>
                    <span class="fw-bold">Writers: </span><span class="fw-light">{{ $comic->writers }}</span>
                </p>
            </div>
            <div class="position-absolute mt-2 top-0 end-0">
                <a class="btn btn-sm btn-success me-2" href="{{ route('admin.comics.edit', $comic->id) }}">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <form action="{{ route('admin.comics.destroy', $comic->id) }}" class="d-inline form-terminator me-2" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        </article>
    </div>
</div>
@endsection

@section('custom-scripts-tail')
    <script>
        const deleteFormElements = document.querySelectorAll('form.form-terminator');
        deleteFormElements.forEach(formElement => {
            formElement.addEventListener('submit', function(event) {
                event.preventDefault();
                const userConfirm = window.confirm('Are you sure you want to delete this comic?');
                if (userConfirm){
                    this.submit();
                }
            });
        });
    </script>
@endsection