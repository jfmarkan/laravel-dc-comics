@extends('layouts.app')

@section('title', 'Admin Index')

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
        <div class="col-12">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th>Actions</th>
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
                            <td>
                                <a class="btn btn-sm btn-primary me-2"
                                    href="{{ route('admin.comics.show', $comic->id) }}">
                                    View
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-block">
        {!! $comicList->links() !!}
    </div>
</div>

@endsection