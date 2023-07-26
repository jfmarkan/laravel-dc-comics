@extends('layouts.app')

@section('title', 'Admin Index')

@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="m-3">
                    Admin Comics Indexed View
                </h1>
            </div>
        </div>
        <div class="row">
            @if (session('deleted'))
                <div class="col-12">
                    <div class="alert alert-danger">
                        <i class="fa-solid fa-circle-xmark"></i> {{ session('deleted') }} has been succesfully deleted.
                    </div>
                </div>
            @elseif ( session('created'))
                <div class="col-12">
                    <div class="alert alert-success">
                        <i class="fa-solid fa-circle-exclamation"></i> {{ session('created') }} has been succesfully created.
                    </div>
                </div>
            @elseif ( session('restored'))
                <div class="col-12">
                    <div class="alert alert-warning">
                        <i class="fa-solid fa-circle-exclamation"></i> {{ session('restored') }} has been succesfully restored.
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comicList as $comic)
                            <tr>
                                <th scope="row">
                                    {{ $comic->id }}
                                </th>
                                <td>
                                    {{ $comic->title  }}
                                </td>
                                <td>
                                    {{ $comic->series  }}
                                </td>
                                <td>
                                    {{ $comic->sale_date  }}
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary me-2"
                                        href="{{ route('admin.comics.show', $comic->id) }}">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a class="btn btn-sm btn-success me-2"
                                        href="{{ route('admin.comics.edit', $comic->id) }}">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <form action="{{ route('admin.comics.destroy', $comic->id) }}" class="d-inline form-terminator" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="btn-toolbar mb-3">
                <div class="btn-group me-2">
                    {!! $comicList->links() !!}
                </div>
            </div>
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