@extends('layouts.app')

@section('title', 'Admin Add New')

@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-8 bg-white my-5">
                <h1>
                    Modify {{ $comic->title }}
                </h1>
            </div>
            <form class="col-8 bg-light p-3 rounded" action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" name="title" value='{{ $comic->title }}'>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">
                        Description
                    </label>
                    <input type="text" class="form-control" id="description" name="description" value='{{ $comic->description }}'>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">
                        Thumb
                    </label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value='{{ $comic->thumb }}'>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price" value='{{ $comic->price }}'>
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">
                            Series
                        </label>
                        <input type="text" class="form-control" id="series" name="series" value='{{ $comic->series }}'>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">
                            Sale date:
                        </label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value='{{ $comic->sale_date }}'>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">
                            Type
                        </label>
                        <input type="text" class="form-control" id="type" name="type" value='{{ $comic->type }}'>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="artists" class="form-label">
                        Artists
                    </label>
                    <input type="text" class="form-control" id="artists" name="artists" value='{{ $comic->artists }}'>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">
                        Writers
                    </label>
                    <input type="text" class="form-control" id="writers" name="writers" value='{{ $comic->writers }}'>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-check"></i>
                </button>
                <a href="{{ route('admin.comics.index')}}" class="btn btn-danger">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </form>
        </div>
    </div>
@endsection